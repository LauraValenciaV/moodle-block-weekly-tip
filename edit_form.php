<?php

// This file defines the form that teachers see when they configure the block inside a course.

defined('MOODLE_INTERNAL') || die();

class block_weekly_tip_edit_form extends block_edit_form {

    protected function specific_definition($mform) {

        // Add a header section for the block configuration form.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

        // Text area for teachers to add multiple tips (one per line).
        $mform->addElement('textarea', 'config_localtips', get_string('localtips', 'block_weekly_tip'), 'wrap="virtual" rows="5" cols="50"');

        // Explanation: teachers can write tips separated by new lines.
        $mform->setType('config_localtips', PARAM_RAW);

        // Optional: Add help button (shows a tooltip in Moodle).
        $mform->addHelpButton('config_localtips', 'localtips', 'block_weekly_tip');
    }
}