<?php

return [
    'plural' => 'Question Three',
    'trashedplural' => 'Deleted options',
    'singular' => 'option',
    'empty' => 'There are no options',
    'select' => 'Select option',
    'perPage' => 'Count Results Per Page',
    'reason' => 'How did you know us',
    'actions' => [
        'list' => 'List options',
        'show' => 'Show option',
        'create' => 'Create option',
        'new' => 'New',
        'edit' => 'Edit option',
        'delete' => 'Delete option',
        'trashed' => 'List Deleted options',
        'restore' => 'Restore option',
        'force' => 'Force Delete option',
        'save' => 'Save',
        'filter' => 'Filter',
    ],
    'messages' => [
        'created' => 'The option has been created successfully.',
        'updated' => 'The option has been updated successfully.',
        'deleted' => 'The option has been deleted successfully.',
        'restored' => 'The option has been restored successfully.',
        'fdeleted' => 'The option has been deleted permanently successfully.',
    ],
    "attributes" => [
        'option' => 'option',
        'created_at' => 'Created at',
    ],
    'dialogs' => [
        'delete' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the option?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
        'force' => [
            'title' => 'Warning !',
            'info' => 'Are you sure you want to delete the option permanently?',
            'confirm' => 'Delete',
            'cancel' => 'Cancel',
        ],
        "restore" => [
            'title' => 'Attention !',
            'info' => 'Are you sure you want to restore the option?',
            'confirm' => 'Restore',
            'cancel' => 'Cancel',
        ]
    ],
];
