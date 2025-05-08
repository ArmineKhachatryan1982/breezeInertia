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
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 2,
                'name' => 'Удаление растяжек',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 3,
                'name' => 'IPL фотоомоложение',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 4,
                'name' => 'Удаление пигментации',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 5,
                'name' => 'Лечение акне',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 6,
                'name' => 'Удаление татуажа бровей',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 7,
                'name' => 'Удаление новообразования',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ],
            [
                'id' => 8,
                'name' => 'SMAS-лифтинг',
                'price' => null,
                'created_at' => null,
                'updated_at' => null
            ]
        ]);
    }
}
