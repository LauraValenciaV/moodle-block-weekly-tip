<?php
// This file defines the capabilities (permissions) for the Weekly Tip block.

defined('MOODLE_INTERNAL') || die();

$capabilities = [

    // Capability: allow users to add the block in any course/page.
    'block/weekly_tip:addinstance' => [
        'captype' => 'write',              // Type of capability: write or read.
        'contextlevel' => CONTEXT_BLOCK,   // Context: this applies at the block level.
        'archetypes' => [                  // Default roles that will have this capability.
            'editingteacher' => CAP_ALLOW, // Teachers can add the block.
            'manager' => CAP_ALLOW         // Managers can add the block.
        ],
        'clonepermissionsfrom' => 'moodle/site:manageblocks' // Copy from core capability.
    ],

    // Capability: allow users to add the block to their personal Dashboard.
    'block/weekly_tip:myaddinstance' => [
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,  // Applies at the system level (Dashboard).
        'archetypes' => [
            'user' => CAP_ALLOW            // Every user can add this block to their Dashboard.
        ],
        'clonepermissionsfrom' => 'moodle/my:addinstance'
    ],
];