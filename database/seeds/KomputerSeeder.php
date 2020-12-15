<?php

use Illuminate\Database\Seeder;

class KomputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('komputers')->insert([
            [
                'comname'=>'Asus',
                'comprice'=>'10000000',
                'comimage'=>'/image/komputer/komputer1.jpg',
                'comram'=>'4',
                'comharddisk'=>'320',

            ],
            // alt+shift+panah bawah = duplikat
            [
                'comname'=>'Seth',
                'comprice'=>'8000000',
                'comimage'=>'/image/komputer/komputer2.jpg',    
                'comram'=>'8',
                'comharddisk'=>'500',        
            ],
            [
                'comname'=>'Volin',
                'comprice'=>'7000000',
                'comimage'=>'/image/komputer/komputer3.jpg',
                'comram'=>'8',
                'comharddisk'=>'320',
            ],
        ]);
    }
}
