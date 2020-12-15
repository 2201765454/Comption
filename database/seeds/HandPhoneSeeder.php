<?php

use Illuminate\Database\Seeder;

class HandPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('handphones')->insert([
            [
                'hpname'=>'Anec',
                'hpprice'=>'5000000',
                'hpimage'=>'/image/handphone/handphone1.jpg',
                'hpcapacity'=>'64',
                'hpbatery'=>'2815',
                'hpcamera'=>'12',
            ],
            // alt+shift+panah bawah = duplikat
            [
                'hpname'=>'Lenvo',
                'laptopprice'=>'3000000',
                'hpimage'=>'/image/handphone/handphone2.jpg',
                'hpcapacity'=>'128',
                'hpbatery'=>'2815',
                'hpcamera'=>'48',
            ],
            [
                'hpname'=>'Zenovo',
                'hpprice'=>'4000000',
                'hpimage'=>'/image/handphone/handphone3.jpg',
                'hpcapacity'=>'256',
                'hpbatery'=>'5000',
                'hpcamera'=>'64',  
            ],
        ]);
    }
}
