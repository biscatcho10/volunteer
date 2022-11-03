<?php

namespace Modules\Reports\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Reports\Entities\Report;

class ReportsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $report = Report::create([
                'name:en' => 'APE Award Round 16 - Booklet',
                'name:ar' => 'جائزة APE جولة 16 - كتيب',
                'description:en' => 'Applications associated with the APE Award Round 16 - Booklet',
                'description:ar' => 'التطبيقات المرتبطة بجائزة APE الجولة 16 - كتيب'
            ]);

            // add image
            $report->addMedia(__DIR__ . '/files/image.jpg')
                ->preservingOriginal()
                ->toMediaCollection('images');

            // add file
            $report->addMedia(__DIR__ . '/files/file.pdf')
                ->preservingOriginal()
                ->toMediaCollection('ar_files');
            // add file
            $report->addMedia(__DIR__ . '/files/file.pdf')
                ->preservingOriginal()
                ->toMediaCollection('en_files');
        }
    }
}
