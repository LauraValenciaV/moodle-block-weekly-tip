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

    // 1 Initializes the block (sets its title)
    public function init() {
        // Uses the text defined in lang/en/block_weekly_tip.php
        $this->title = get_string('pluginname', 'block_weekly_tip');
    }

    // 2 Returns the block content
    public function get_content() {

        // If the content is already loaded, return it
        if ($this->content !== null) {
            return $this->content;
        }

        // Create an empty object for the content
        $this->content = new stdClass();

        // Here goes the text that will be displayed in the block
        $this->content->text = get_weekly_tip();

        // Footer (we leave it empty)
        $this->content->footer = '';

        return $this->content;
    }
}

/**
 * Function to get a weekly tip
 *
 * This function returns a tip based on the current week number.
 * It cycles through a predefined list of tips.
 *
 * @return string A weekly tip for the user
 */

function get_weekly_tip() {
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