<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelves')->insert([
            [
                'code'=> 'RAK01',
                'name'=> 'Informatika',
            ],
            [
                'code'=> 'RAK02',
                'name'=> 'Sipil',
            ],
            [
                'code'=> 'RAK03',
                'name'=> 'Industri',
            ],
        ]);
        
    }
}
