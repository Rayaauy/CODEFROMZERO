<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodolistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_todolist')->insert([
            [
                'task' => 'Belajar Laravel',
                'due_date' => '2026-06-30',
                'status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'task' => 'Membuat Proyek Laravel',
                'due_date' => '2026-07-15',
                'status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'task' => 'Menyelesaikan Tugas Laravel',
                'due_date' => '2026-07-31',
                'status' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
