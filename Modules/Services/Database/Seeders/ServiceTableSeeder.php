<?php

namespace Modules\Services\Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Services\Entities\Service;
use Modules\Services\Entities\ServiceTranslation;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $services = [
            [
                'name:en' => 'Health Development',
                'name:ar' => 'التنمية الصحية',
                'description:en' => 'Health Development is the process of improving the health of a population by improving the health of the people who live in it.',
                'description:ar' => 'التنمية الصحية هي عملية تحسين صحة السكان الذين تعيشون فيها.',
            ],
            [
                'name:en' => 'Vocational Training',
                'name:ar' => 'التدريب الحرفي و زيادة الدخل',
                'description:en' => 'Vocational Training is the process of improving the skills of a population by improving the skills of the people who live in it.',
                'description:ar' => 'التدريب الحرفي و زيادة الدخل هو عملية تحسين المهارات السكان الذين تعيشون فيها.',
            ],
            [
                'name:en' => 'Educational Development',
                'name:ar' => 'دعم التعليم الجامعي',
                'description:en' => 'Educational Development is the process of improving the skills of a population by improving the skills of the people who live in it.',
                'description:ar' => 'دعم التعليم الجامعي هو عملية تحسين المهارات السكان الذين تعيشون فيها.',
            ],
            [
                'name:en' => 'Environmental Development',
                'name:ar' => 'التنمية البيئية',
                'description:en' => 'Environmental Development is the process of improving the skills of a population by improving the skills of the people who live in it.',
                'description:ar' => 'التنمية البيئية هو عملية تحسين المهارات السكان الذين تعيشون فيها.',
            ],
            [
                'name:en' => 'Environmental Education',
                'name:ar' => 'الرعاية والتثقيف الصحي',
                'description:en' => 'Environmental Education is the process of improving the skills of a population by improving the skills of the people who live in it.',
                'description:ar' => 'الرعاية والتثقيف الصحي هو عملية تحسين المهارات السكان الذين تعيشون فيها.',
            ],
            [
                'name:en' => 'Relief And Aids',
                'name:ar' => 'الإغاثة والمساعدات',
                'description:en' => 'Relief And Aids is the process of improving the skills of a population by improving the skills of the people who live in it.',
                'description:ar' => 'الإغاثة والمساعدات هو عملية تحسين المهارات السكان الذين تعيشون فيها.',
            ]
        ];


        foreach ($services as $key => $service) {
            $serv = Service::create($service);
            $key = $key + 1;
            // add image
            $serv->addMedia(__DIR__ . '/images/service.jpg')
                ->preservingOriginal()
                ->toMediaCollection('images');

            // add icon
            $serv->addMedia(__DIR__ . '/icons/' . $key . '.svg')
                ->preservingOriginal()
                ->toMediaCollection('icons');
        }


        foreach (Service::get() as $service) {
            $service->update([
                'rank' => $service->id
            ]);
        }
    }
}
