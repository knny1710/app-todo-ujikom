<?php

namespace Database\Seeders;
// database seeder adalah namespace default yang digunakan untuk semua seeder di laravel
// seeder adalah class yang dijalankan ketika database dijalankan
// namespace di php adalah cara untuk mengelompokan class agar tidak terjadi konflik nama antara class dengan class lain

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TaskList;

class TaskListSeeder extends Seeder
// class TaskListSeeder extends Seeder merupakan class yang dijalankan ketika database dijalankan 
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lists = [
            [
                'name' => 'Pekerjaan Rumah',
            ],
            [
                'name' => 'Belajar',
            ],
            [
                'name' => 'Ujikom',
            ],
            [
                'name' => 'WishList Sirkuit',
            ]
            
        ];

        TaskList::insert($lists);
    }
}
