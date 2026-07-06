<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create(['id' => 1, 'nama' => 'Raditiya', 'email' => 'radit@gmail.com', 'telepon' => '08828192']);
        Member::create(['id' => 2, 'nama' => 'Sunjamko', 'email' => 'dioaj@gmail.com', 'telepon' => '08823192']);
        Member::create(['id' => 3, 'nama' => 'Jonase', 'email' => 'jona@gmail.com', 'telepon' => '08828292']);
    }
}
