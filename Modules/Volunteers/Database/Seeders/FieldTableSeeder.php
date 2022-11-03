<?php

namespace Modules\Volunteers\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Volunteers\Entities\Field;

class FieldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = [
            "Other ('mention')" => "أخرى ('اذكر')",
            "Education" => "التعليم",
            "Marketing" => "التسويق",
            "Health" => "الصحة",
            "Training" => "التدريب",
            "Environment" => "البيئة",
            "Entertainment" => "الترفيه",
            "Handicrafts" => "الحرفيات",
            "Funds management" => "إدارة الأموال",
            "Public relations" => "العلاقات العامة",
        ];

        foreach ($fields as $key => $value) {
            Field::create([
                'name:ar' => $value,
                'name:en' => $key,
            ]);
        }
    }
}
