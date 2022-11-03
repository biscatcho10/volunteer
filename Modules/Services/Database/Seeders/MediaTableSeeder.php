<?php

namespace Modules\Services\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Services\Entities\Gallery;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $media = [
            [
                'name:en' => 'Media and Press News',
                'name:ar' => 'أخبار وصحافة',
                'description:en' => 'Recycling Machine Production Unit – This project was started as a way to provide training and employment for marginalized youth. With the help of volunteer engineers, A.P.E.',
                'description:ar' => 'وحدة إنتاج آلة إعادة التدوير - بدأ هذا المشروع كوسيلة لتوفير التدريب والتوظيف للشباب المهمشين.بمساعدة المهندسين المتطوعين ، A.P.E.',
            ],
            [
                'name:en' => 'Events and Activities',
                'name:ar' => 'الأحداث والأنشطة',
                'description:en' => 'A.P.E. launched a literacy program in 1989 in a small apartmدent in Moqattam. This small beginning has grown to include a nursery',
                'description:ar' => 'A.P.E. بدأت برنامج الإنجليزية في عام 1989 في محل صغير في مقاطعة مقاطعة. هذا البداية الصغير تم تمدده إلى تضمين الأطفال',
            ],
            [
                'name:en' => 'Research and publications',
                'name:ar' => 'البحث والنشرات',
                'description:en' => 'Recycling Machine Production Unit – This project was started as a way to provide training and employment for marginalized youth. With the help of volunteer engineers, A.P.E.',
                'description:ar' => 'وحدة إنتاج آلة إعادة التدوير - بدأ هذا المشروع كوسيلة لتوفير التدريب والتوظيف للشباب المهمشين.بمساعدة المهندسين المتطوعين ، A.P.E.',
            ],
            [
                'name:en' => 'Success stories',
                'name:ar' => 'قصص النجاح',
                'description:en' => 'A.P.E. launched a literacy program in 1989 in a small apartmدent in Moqattam. This small beginning has grown to include a nursery',
                'description:ar' => 'A.P.E. بدأت برنامج الإنجليزية في عام 1989 في محل صغير في مقاطعة مقاطعة. هذا البداية الصغير تم تمدده إلى تضمين الأطفال',
            ]
        ];


        foreach ($media as $key => $value) {
            $media = Gallery::create($value);
            // add image
            $media->addMedia(__DIR__ . '/images/img_video.jpg')
                ->preservingOriginal()
                ->toMediaCollection('albums');
        }
    }
}
