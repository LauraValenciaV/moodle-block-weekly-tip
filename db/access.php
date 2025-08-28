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
        'clonepermissionsfrom' => 'moodle/site:manageblocks'
    ],

    // Capability: who can add this block to the dashboard (My home).
    'block/weekly_tip:myaddinstance' => [
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,   // This applies at system level (dashboard).
        'archetypes' => [
            'user' => CAP_ALLOW             // Any user can add it to their own dashboard.
        ],
        'clonepermissionsfrom' => 'moodle/my:addinstance'
    ],

    // Capability: who can edit local tips inside the block.
    'block/weekly_tip:managelocaltips' => [
        'captype' => 'write',               // This is also a "write" capability.
        'contextlevel' => CONTEXT_BLOCK,    // Applies at block context (per block instance).
        'archetypes' => [
            'manager' => CAP_ALLOW,         // By default, only managers can edit local tips.
            'editingteacher' => CAP_ALLOW   // If you want editing teachers to also edit tips
        ]
    ],
];