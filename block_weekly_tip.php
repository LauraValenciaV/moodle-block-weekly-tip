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
 * Weekly Tip block
 *
 * @package   block_weekly_tip
 * @copyright 2025 Laura Valencia
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_weekly_tip extends block_base {

    // Initializes the block (sets its title)
    public function init() {
        // Uses the text defined in lang/en/block_weekly_tip.php
        $this->title = get_string('pluginname', 'block_weekly_tip');
    }

    public function specialization() {
        // This method can be used to customize the block for different contexts
        // For example, you could set a different title or content based on the user's role
        if (is_siteadmin()){
            $this->title = 'Admin Weekly Tip';
        } else {
            $this->title = 'Weekly Tip';
        }
    }

    // Defines where the block can be used
    public function applicable_formats() {
    return [
        'site-index' => true,   // Main site homepage
        'course-view' => true,  // Course pages
        'my' => true           // Do not show in the user dashboard
        ];
    }

    // Returns the block content
    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();

        // -----------------------------
        // 1. Check LOCAL tips (professor/course level)
        // -----------------------------
        $tips = [];
        if (!empty($this->config->localtips)) {
            $tips = array_filter(array_map('trim', preg_split("/\r\n|\n|\r/", $this->config->localtips)));
        }

        // -----------------------------
        // 2. If no local tips → check GLOBAL tips (admin level)
        // -----------------------------
        if (empty($tips)) {
            $global = get_config('block_weekly_tip', 'globaltips');
            if (!empty($global)) {
                $tips = array_filter(array_map('trim', preg_split("/\r\n|\n|\r/", $global)));
            }
        }

        // -----------------------------
        // 3. If no local/global tips → fallback to default tips (your get_weekly_tip())
        // -----------------------------
        if (empty($tips)) {
            $selectedtip = $this->get_weekly_tip(); // use default tips
        } else {
            // Rotate tips weekly
            $week = (int)date('W'); // current week number (1–52)
            $index = $week % count($tips);          // Rotate deterministically by week
            $selectedtip = $tips[$index];
        }

        // Render (plain HTML while you learn; later you can use html_writer).
        $this->content->text = '<div class="weekly-tip">'. $selectedtip .'</div>';

        return $this->content;   // <-- ESTO FALTABA
    }

    /**
     * Determines whether multiple instances of this block can be added to the same page.
     * Returning false means only one instance of this block can exist per page.
     *
     * @return bool
     */
    public function instance_allow_multiple() {
        return false; // If set to false, users cannot add more than one instance of this block to the same page.
    }

    /**
     * Function to get a weekly tip
     *
     * This function returns a tip based on the current week number. (shown if no global/local exist)
     * It cycles through a predefined list of tips.
     *
     * @return string A weekly tip for the user
     */

    public function get_weekly_tip() {
        $tips = [
            get_string('tip1', 'block_weekly_tip'),
            get_string('tip2', 'block_weekly_tip'),
            get_string('tip3', 'block_weekly_tip'),
            get_string('tip4', 'block_weekly_tip'),
            get_string('tip5', 'block_weekly_tip')
        ];
        
        $actual_week = date('W'); // Current week number (1–52)
        $tip_index = ($actual_week - 1) % count($tips); // Ensures tips show in order
        return $tips[$tip_index];
    }
    
}

