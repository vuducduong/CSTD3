<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert([
        [
            'name'=>'10A2',
            'type'=>'Lớp chọn',
        ],
        [
            'name'=>'10A3','type'=>'Đại trà'

        ],
        [
            'name'=>'10A4','type'=>'Đại trà',
        ],
        [
            'name'=>'10A5','type'=>'Đại trà',
        ],
        [
            'name'=>'10A6','type'=>'Đại trà',
        ],
        [
            'name'=>'10A7','type'=>'Đại trà'
        ]]);
    }
}
