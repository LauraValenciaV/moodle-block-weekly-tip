<?php

// This file defines the form that teachers/managers see when they configure the block.

defined('MOODLE_INTERNAL') || die();

class block_weekly_tip_edit_form extends block_edit_form {

    protected function specific_definition($mform) {
        global $PAGE;

        // Header section for the block configuration form.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

        // -------------------------------------------------------
        // Get the context of the block from the current page.
        // This is safer than trying to use $COURSE here.
        // -------------------------------------------------------
        $context = $PAGE->context;

        // Check if the user has permission to manage local tips.
        if (has_capability('block/weekly_tip:managelocaltips', $context)) {
            // Textarea for entering local tips.
            // Teachers (with permission) can write one tip per line.
            $mform->addElement(
                'textarea',
                'config_localtips',
                get_string('localtips', 'block_weekly_tip'),
                'wrap="virtual" rows="5" cols="50"'
            );

            // Define the expected parameter type for security.
            $mform->setType('config_localtips', PARAM_RAW);

            // Optional help button (tooltip in Moodle).
            $mform->addHelpButton('config_localtips', 'localtips', 'block_weekly_tip');
        } else {
            // If the user does not have permission, show a static info message.
            $mform->addElement('static', 'no_permission', '',
                get_string('nopermission', 'block_weekly_tip'));
        }
    }
}
