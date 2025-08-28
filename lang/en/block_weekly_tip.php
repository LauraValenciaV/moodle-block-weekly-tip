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
 * Language strings for component 'block_weekly_tip', language 'en'
 *
 * @package   block_weekly_tip
 * @copyright 2025 Laura Valencia
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Plugin name (shown in the block list).
$string['pluginname'] = 'Weekly Tip';

// Capabilities (permissions to add the block).
$string['weekly_tip:addinstance'] = 'Add a new Weekly Tip block';
$string['weekly_tip:myaddinstance'] = 'Add a new Weekly Tip block to the My Moodle page';

// Block settings: custom text label for the configuration form.
$string['tiptext'] = 'Custom tip text';

// Default tips shown in the block (these can be rotated or displayed randomly).
$string['tip1'] = 'Did you know you can customize your dashboard?';
$string['tip2'] = 'Check out the latest updates in the Moodle community.';
$string['tip3'] = 'Remember to back up your courses regularly.';
$string['tip4'] = 'Engage with your peers in the forums for better learning.';
$string['tip5'] = 'Explore new plugins to enhance your Moodle experience.';

// Admin settings strings.
$string['globaltips'] = 'Global tips (one per line)';
$string['globaltips_desc'] = 'These tips will be shown site-wide. Enter one tip per line. The block will display one tip per week, cycling in order.';

// Local tips strings (for teachers when editing the block in a course).
$string['localtips'] = 'Local tips (one per line)';
$string['localtips_desc'] = 'These tips will only apply to this course. Enter one tip per line. The block will display one tip per week, cycling in order.';

// Capability: permission to manage local tips in the block.
$string['weekly_tip:managelocaltips'] = 'Manage local tips for Weekly Tip block';

// Message shown when user does not have permission to edit local tips.
$string['nopermission'] = 'You do not have permission to edit local tips in this block.';

// Message shown when there are no tips available (fallback case).
$string['notipsavailable'] = 'No tips available';