<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'super_admin' => [
            // 'roles' => 'c,r,u,d,s',
            // 'admins' => 'c,r,u,d,s,b',
            // 'users' => 'c,r,u,d,s,b,rt,re,f',
            'settings' => 'c,r,u,d',
            // 'backups' => 'c,r,d,dl',
            // 'countries' => 'c,r,u,d,s',
            // 'cities' => 'c,r,u,d,s',
            // 'partners' => 'c,r,u,d,s',
            // 'news' => 'c,r,u,d,s',
            // 'services' => 'c,r,u,d,s',
            // 'subservices' => 'c,r,u,d,s',
            // 'galleries' => 'c,r,u,d,s',
            // 'events' => 'c,r,u,d,s',
            'reasons' => 'c,r,u,d,s',
            'volunteers' => 'c,r,u,d,s',
            // 'sliders' => 'c,r,u,d,s',
            // 'methods' => 'c,r,u,d,s',
            // 'donors' => 'c,r,u,d,s',
            // 'awards' => 'c,r,u,d,s',
            // 'donations' => 'r,d,s',
            // 'contactus' => 'r,d,s',
            // 'subscribers' => 'r,d,s',
            'fields' => 'c,r,u,d,s',
            'categories' => 'c,r,u,d,s',
            // 'reports' => 'c,r,u,d,s',
            // 'videos' => 'c,r,u,d,s',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        's' => 'show',
        'b' => 'block',
        'dl' => 'download',
        'so' => 'sort',
        'rt' => 'readTrashed',
        're' => 'restore',
        'f' => 'forceDelete',
        'a' => 'attach',
        'st' => 'status',
    ]
];
