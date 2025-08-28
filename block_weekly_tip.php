<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Weekly Tip block.
 *
 * @package   block_weekly_tip
 */

defined('MOODLE_INTERNAL') || die();

class block_weekly_tip extends block_base {

    /**
     * Initialize the block.
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_weekly_tip');
    }

    /**
     * Apply custom title if set.
     */
    public function specialization() {
        if (!empty($this->config->title)) {
            $this->title = $this->config->title;
        }
    }

    /**
     * Where the block can appear.
     *
     * @return array
     */
    public function applicable_formats() {
        return [
            'site-index' => true,   // Main site homepage
            'course-view' => true,  // Course pages
            'my' => true           // Allow in the user dashboard
        ];
    }

    /**
     * Generate the block content.
     *
     * @return stdClass|null
     */
    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->text = '';
        $this->content->footer = '';

        $tip = $this->get_weekly_tip();
        $this->content->text = '<div class="weekly-tip-content">' . $tip . '</div>';

        return $this->content;
    }

    /**
     * Allow multiple instances in the same page.
     *
     * @return bool
     */
    public function instance_allow_multiple() {
        return true;
    }

    /**
     * Get the tip for the current week.
     *
     * @return string
     */
    private function get_weekly_tip() {
        global $CFG;

        // Local tips (per block instance).
        $tips = [];
        if (!empty($this->config->localtips)) {
            $tips = array_filter(array_map('trim', explode("\n", $this->config->localtips)));
        }

        // Global tips (from site config).
        $globaltips = get_config('block_weekly_tip', 'globaltips');
        if (!empty($globaltips)) {
            $tips = array_merge($tips, array_filter(array_map('trim', explode("\n", $globaltips))));
        }

        if (empty($tips)) {
            // Fallback: usar los tips del lang.
            $defaulttips = [];
            for ($i = 1; $i <= 5; $i++) {
                $stringid = 'tip' . $i;
                if (get_string_manager()->string_exists($stringid, 'block_weekly_tip')) {
                    $defaulttips[] = get_string($stringid, 'block_weekly_tip');
                }
            }
            $tips = $defaulttips;
        }

        if (empty($tips)) {
            return get_string('notipsavailable', 'block_weekly_tip');
        }

        // Select tip based on current ISO week number.
        $week = (int)date('W');
        $index = $week % max(1, count($tips));
        $selectedtip = $tips[$index];

        return format_text($selectedtip, FORMAT_HTML);
    }
}