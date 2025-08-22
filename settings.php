<?php

// Defines site-wide settings for the Weekly Tip block. Visible only to site administrators.

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    // Site-wide list of tips (one per line). Used by all courses unless
    // you later add local (per-course) overrides.
    $settings->add(new admin_setting_configtextarea(
        'block_weekly_tip/globaltips',                               // Unique setting name (component/setting).
        get_string('globaltips', 'block_weekly_tip'),               // Setting title (shown in UI).
        get_string('globaltips_desc', 'block_weekly_tip'),          // Help/description.
        "Organize your week using the calendar.\nReview last class notes.\nParticipate in the forums weekly.", // Default value.
        PARAM_RAW,                                                  // Accept raw text (we'll split by lines later).
        6,                                                          // Rows.
        60                                                          // Cols.
    ));
}