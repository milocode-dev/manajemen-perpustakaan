<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create(['judul' => 'Harry Potter', 'penulis' => 'J.K Rowling', 'tahun' => 1977, 'member_id' => 1]);
        Book::create(['judul' => 'Haer', 'penulis' => 'Om Rowing', 'tahun' => 2007, 'member_id' => 2]);
        Book::create(['judul' => 'Harryer', 'penulis' => 'AS Jeing', 'tahun' => 1927, 'member_id' => 3]);
    }
}
