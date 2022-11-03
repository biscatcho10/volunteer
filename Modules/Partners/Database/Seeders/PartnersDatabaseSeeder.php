<?php

namespace Modules\Partners\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Partners\Entities\Partner;

class PartnersDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partners = [
            'logo1' => [
                'name:en' => 'partner 1',
                'name:ar' => 'شريك 1',
                'link' => '#'
            ],
            'logo2' => [
                'name:en' => 'partner 2',
                'name:ar' => 'شريك 2',
                'link' => '#'
            ],
            'logo3' => [
                'name:en' => 'partner 3',
                'name:ar' => 'شريك 3',
                'link' => '#'
            ],
            'logo4' => [
                'name:en' => 'partner 4',
                'name:ar' => 'شريك 4',
                'link' => '#'
            ],
            'logo5' => [
                'name:en' => 'partner 5',
                'name:ar' => 'شريك 5',
                'link' => '#'
            ],
            'logo6' => [
                'name:en' => 'partner 6',
                'name:ar' => 'شريك 6',
                'link' => '#'
            ],
            'logo7' => [
                'name:en' => 'partner 7',
                'name:ar' => 'شريك 7',
                'link' => '#'
            ]
        ];

        foreach ($partners as $key => $partner) {
            $partner = Partner::create($partner);
            // add logo image
            $partner->addMedia(__DIR__ . '/images/' . $key . '.png')
                ->preservingOriginal()
                ->toMediaCollection('images');
        }
    }
}
