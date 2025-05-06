<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Микроиголчатый рф лифтинг\r\n',
                'key' => '',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 2,
                'name' => 'Удаление растяжек',
                'key' => '',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 3,
                'name' => 'IPL фотоомоложение',
                'key' => '',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 4,
                'name' => 'Удаление пигментации',
                'key' => '',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 5,
                'name' => 'Лечение акне',
                'key' => '',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 6,
                'name' => 'Удаление татуажа бровей',
                'key' => '',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 7,
                'name' => 'Удаление новообразования',
                'key' => '',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 8,
                'name' => 'SMAS-лифтинг',
                'key' => '',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ]
        ]);
    }
}
