<?php

use Illuminate\Database\Seeder;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laptops')->insert([
            [
                'laptopname'=>'Wed',
                'laptopprice'=>'5000000',
                'laptopimage'=>'/image/laptop/laptop1.jpg',
                'laptopram'=>'8',
                'laptopssd'=>'512',

            ],
            // alt+shift+panah bawah = duplikat
            [
                'laptopname'=>'Mac',
                'laptopprice'=>'3000000',
                'laptopimage'=>'/image/laptop/laptop2.jpg',
                'laptopram'=>'4',
                'laptopssd'=>'512',
            ],
            [
                'laptopname'=>'Zenovo',
                'laptopprice'=>'4000000',
                'laptopimage'=>'/image/laptop/laptop3.jpg',
                'laptopram'=>'4',
                'laptopssd'=>'240',
            ],
        ]);
    }
}
