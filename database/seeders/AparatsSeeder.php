<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AparatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the aparats table with initial data.
     */
    public function run()
    {
        DB::table('aparats')->insert([
            [
                'id' => 13,
                'title' => 'Немецкий SKIN',
                'description' => 'Ipl Фотоомоложене \r\nЛазерный карбонатный пилинг \r\nЛазерное удаление тату и татуажа \r\nЭлос эпиляция',
                'image' => 'aparats/13/cca21d363cbb9f0d21ceeef3c7773e77.jpg',
                'created_at' => '2025-05-05 22:01:31',
                'updated_at' => '2025-05-05 22:01:31'
            ],
            [
                'id' => 14,
                'title' => 'Аппарат Lifting Expert',
                'description' => 'hifu 3\r\nкартр 1.5, 3.0 и 4.5 + микроигольчатый RF-лифтинг',
                'image' => 'aparats/14/0cb011253e3bbb543c4e88faf3fddfe9.jpg',
                'created_at' => '2025-05-05 22:16:08',
                'updated_at' => '2025-05-05 22:16:08'
            ],
            [
                'id' => 15,
                'title' => 'M22',
                'description' => 'это многомодульная система, осуществляет эффективное омоложение кожи и эпиляцию, удаляет сосуды и пигментации.',
                'image' => 'aparats/15/3b54022b3e969a850ad4a57da25b685c.jpg',
                'created_at' => '2025-05-05 22:18:18',
                'updated_at' => '2025-05-05 22:18:18'
            ],
            [
                'id' => 16,
                'title' => 'LPG Cellu M6',
                'description' => 'это аппарат нового поколения, используемый в области косметологии для эндермологических процедур.',
                'image' => 'aparats/16/230064687befb98b06633fd5213e31c6.jpg',
                'created_at' => '2025-05-05 22:19:10',
                'updated_at' => '2025-05-05 22:19:10'
            ]
        ]);
    }
}
