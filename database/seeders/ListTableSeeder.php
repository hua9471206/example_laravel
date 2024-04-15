<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\home\Member;
use Illuminate\Database\Seeder;

class ListTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        // $data = [
        //     [
        //         'title'      => 'title1',
        //         'content'    => 'content1',
        //         'created_at' => '2024-04-15',
        //         'updated_at' => '2024-04-16',
        //     ],
        //     [
        //         'title'      => 'title2',
        //         'content'    => 'content2',
        //         'created_at' => '2024-04-15',
        //         'updated_at' => '2024-04-16',
        //     ],
        //     [
        //         'title'      => 'title3',
        //         'content'    => 'content3',
        //         'created_at' => '2024-04-15',
        //         'updated_at' => '2024-04-16',
        //     ],
        // ];
        // // 將資料寫入 list 資料表
        // DB::table('list')->insert($data);
        Member::factory()->count(10)->create();
    }
}
