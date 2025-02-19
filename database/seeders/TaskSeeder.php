<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'name' => 'Belajar Laravel',
                'description' => 'Belajar Laravel di santri koding',
                'is_completed' => true,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'Belajar')->first()->id,
            ],
            [
                'name' => 'Belajar React',
                'description' => 'Belajar React di WPU',
                'is_completed' => true,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'Belajar')->first()->id,
            ],
            [
                'name' => 'Mencuci Baju',
                'description' => 'Membantu Ibu mencuci baju di hari sabtu',
                'is_completed' => true,
                'priority' => 'low',
                'list_id' => TaskList::where('name', 'Pekerjaan Rumah')->first()->id,
            ],
            [
                'name' => 'Sapu & Pel',
                'description' => 'Membersihkan rumah setiap sore hari',
                'is_completed' => true,
                'priority' => 'low',
                'list_id' => TaskList::where('name', 'Pekerjaan Rumah')->first()->id,
            ],
            [
                'name' => 'Matematika',
                'description' => 'Tugas Matematika bu Nina',
                'is_completed' => true,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'Belajar')->first()->id,
            ],
            [
                'name' => 'PAIBP',
                'description' => 'Tugas presentasi pa budi',
                'is_completed' => true,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'Belajar')->first()->id,
            ],
            [
                'name' => 'Project To Do List',
                'description' => 'Membuat project Todo App untuk ujikom',
                'is_completed' => false,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'Ujikom')->first()->id,
            ],
            [
                'name' => 'Internasional Mandalika',
                'description' => 'Lombok-NTB',
                'is_completed' => false,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'WishList Sirkuit')->first()->id,
            ],
            [
                'name' => 'Gery Mang',
                'description' => 'Sukamelang-Subang',
                'is_completed' => true,
                'priority' => 'low',
                'list_id' => TaskList::where('name', 'WishList Sirkuit')->first()->id,
            ],
            [
                'name' => 'Sentul',
                'description' => 'Sentul-Bogor',
                'is_completed' => True,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'WishList Sirkuit')->first()->id,
            ],
        ];

        Task::insert($tasks);
    }
}
