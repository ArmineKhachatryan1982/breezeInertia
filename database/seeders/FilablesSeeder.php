<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Populates the filables table with initial data.
     */
    public function run()
    {
        DB::table('filables')->insert([
            [
                'id' => 2,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 7,
                'name' => 'Armine.JPG',
                'path' => 'task/7/28254b68e2182118bcf534e3b166c70e.JPG',
                'created_at' => '2025-03-29 13:36:55',
                'updated_at' => '2025-03-29 13:36:55'
            ],
            [
                'id' => 3,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 7,
                'name' => 'photo_5373119119861345874_y.jpg',
                'path' => 'task/7/3b0f42e75117536b611ab1af58733157.jpg',
                'created_at' => '2025-03-29 13:36:55',
                'updated_at' => '2025-03-29 13:36:55'
            ],
            [
                'id' => 4,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 7,
                'name' => 'Armine.JPG',
                'path' => 'task/7/1dffc10b86d75a51a533aed9f08d4451.JPG',
                'created_at' => '2025-03-29 13:36:55',
                'updated_at' => '2025-03-29 13:36:55'
            ],
            [
                'id' => 5,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 7,
                'name' => 'photo_5373119119861345874_y.jpg',
                'path' => 'task/7/8741592fd5914f5cb45f04533e6d190f.jpg',
                'created_at' => '2025-03-29 13:36:55',
                'updated_at' => '2025-03-29 13:36:55'
            ],
            [
                'id' => 6,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 8,
                'name' => 'Armine.JPG',
                'path' => 'service_details/8/cf1e4a133714e6ece2e784755ed443af.JPG',
                'created_at' => '2025-03-29 13:38:41',
                'updated_at' => '2025-03-29 13:38:41'
            ],
            [
                'id' => 7,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 8,
                'name' => 'photo_5373119119861345874_y.jpg',
                'path' => 'service_details/8/96a6a65717d654be204026359eb51651.jpg',
                'created_at' => '2025-03-29 13:38:41',
                'updated_at' => '2025-03-29 13:38:41'
            ],
            [
                'id' => 8,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 8,
                'name' => 'Armine.JPG',
                'path' => 'service_details/8/d0cc8bd2d0cada0fd052d8f610177009.JPG',
                'created_at' => '2025-03-29 13:38:41',
                'updated_at' => '2025-03-29 13:38:41'
            ],
            [
                'id' => 9,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 8,
                'name' => 'photo_5373119119861345874_y.jpg',
                'path' => 'service_details/8/b6fc72c67cb4f391852ed59f6cf056c0.jpg',
                'created_at' => '2025-03-29 13:38:41',
                'updated_at' => '2025-03-29 13:38:41'
            ],
            [
                'id' => 10,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 9,
                'name' => 'photo_5373119119861345888_y.jpg',
                'path' => 'service_details/9/3797cbec17c38ad9132a3603d4d4f028.jpg',
                'created_at' => '2025-03-29 13:40:55',
                'updated_at' => '2025-03-29 13:40:55'
            ],
            [
                'id' => 11,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 9,
                'name' => 'photo_5373119119861345879_y.jpg',
                'path' => 'service_details/9/bd8ce2f2f587f0444922517ad473c25f.jpg',
                'created_at' => '2025-03-29 13:40:55',
                'updated_at' => '2025-03-29 13:40:55'
            ],
            [
                'id' => 14,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 11,
                'name' => 'photo_5373119119861345888_y.jpg',
                'path' => 'service_details/11/646f21b0700840eae434d8961cc5b1d5.jpg',
                'created_at' => '2025-03-29 13:45:20',
                'updated_at' => '2025-03-29 13:45:20'
            ],
            [
                'id' => 20,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 17,
                'name' => 'pigmentacia2.jpg',
                'path' => 'service_details/17/63fc7b01397582d683348701a742697f.jpg',
                'created_at' => '2025-04-05 08:59:56',
                'updated_at' => '2025-04-05 08:59:56'
            ],
            [
                'id' => 21,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 17,
                'name' => 'pigmentacia1.jpg',
                'path' => 'service_details/17/eed52d5819e81e9f143b0febfce17d29.jpg',
                'created_at' => '2025-04-05 08:59:56',
                'updated_at' => '2025-04-05 08:59:56'
            ],
            [
                'id' => 22,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 17,
                'name' => 'pigmentacia.jpg',
                'path' => 'service_details/17/94da9fdd33d1bba4c9e6dd06e42840ee.jpg',
                'created_at' => '2025-04-05 08:59:56',
                'updated_at' => '2025-04-05 08:59:56'
            ],
            [
                'id' => 29,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 18,
                'name' => 'tatuaj1.jpg',
                'path' => 'service_details/18/305c251d5b8a994c3ae3aabdc0aad28a.jpg',
                'created_at' => '2025-04-05 12:29:20',
                'updated_at' => '2025-04-05 12:29:20'
            ],
            [
                'id' => 30,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 20,
                'name' => 'novabrazavania1.jpg',
                'path' => 'service_details/20/bab8fec20cf4fc128db42ae43a0c56b4.jpg',
                'created_at' => '2025-04-05 12:39:01',
                'updated_at' => '2025-04-05 12:39:01'
            ],
            [
                'id' => 32,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 22,
                'name' => 'smas-lifting2.jpg',
                'path' => 'service_details/22/feb768b74895488ede5efcad4228120e.jpg',
                'created_at' => '2025-04-05 12:49:50',
                'updated_at' => '2025-04-05 12:49:50'
            ],
            [
                'id' => 33,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 22,
                'name' => 'SMAS-лифтинг1.jpg',
                'path' => 'service_details/22/8a31b13c1b3f2737eaf1816afdb4b06a.jpg',
                'created_at' => '2025-04-05 12:49:50',
                'updated_at' => '2025-04-05 12:49:50'
            ],
            [
                'id' => 36,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 23,
                'name' => 'akna1.jpg',
                'path' => 'service_details/23/392d9ac1781b8d21e449053db7f4ff5b.jpg',
                'created_at' => '2025-04-05 13:46:18',
                'updated_at' => '2025-04-05 13:46:18'
            ],
            [
                'id' => 37,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 24,
                'name' => 'rastiajka1.jpg',
                'path' => 'service_details/24/93e677ac0b1b62fc5bf7edc5aceb33e3.jpg',
                'created_at' => '2025-04-05 13:50:25',
                'updated_at' => '2025-04-05 13:50:25'
            ],
            [
                'id' => 38,
                'filable_type' => 'App\\Models\\ServiceDetails',
                'filable_id' => 25,
                'name' => 'rf-lifting1.jpg',
                'path' => 'service_details/25/c65c59e27a80c789710b9b9f5a84319f.jpg',
                'created_at' => '2025-04-05 13:56:15',
                'updated_at' => '2025-04-05 13:56:15'
            ]
        ]);
    }
}
