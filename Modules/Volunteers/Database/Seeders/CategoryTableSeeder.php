<?php

namespace Modules\Volunteers\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Volunteers\Entities\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'en' => 'More Explanation (If Any)',
                'ar' => 'مزيد من الشرح (إن وجد)'
            ],
            [
                'en' => 'Children (Male / Female)',
                'ar' => 'الاطفال (ذكور / إناث)',
            ],
            [
                'en' => 'Adults (Male / Female)',
                'ar' => 'البالغين (ذكور / إناث)',
            ],

        ];


        foreach($categories as $category){
            Category::create([
                "name:en" =>  $category['en'],
                "name:ar" =>  $category['ar'],
            ]);
        }
    }
}
