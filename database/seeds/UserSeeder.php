<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [   
                'role_id'=>1,
                'name'=>'dono',
                'email'=>'dono@binus.ac.id',
                'password'=>bcrypt('dono12345'),
                
            ],

            [   
                'role_id'=>2,
                'name'=>'dino',
                'email'=>'dino@binus.ac.id',
                'password'=>bcrypt('dino12345'),
            ],
            ]);
    }
}
