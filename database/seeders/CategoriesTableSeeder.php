<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'user_id' => '1',
                'name_category' => 'laravel8',
                'slug_category' => 'laravel8',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'user_id' => '1',
                'name_category' => 'python',
                'slug_category' => 'python',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'user_id' => '1',
                'name_category' => 'nodeJS',
                'slug_category' => 'nodeJS',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'user_id' => '1',
                'name_category' => 'django',
                'slug_category' => 'django',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ],
            [
                'user_id' => '1',
                'name_category' => 'javascript',
                'slug_category' => 'javascript',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now(),
            ]
        ]);
    }
}
