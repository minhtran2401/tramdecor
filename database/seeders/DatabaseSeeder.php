<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
            DB::table('users')->insert([
                'name' => 'Tran Nhat Minh',
                'email' => 'minh@gmail.com',
                'password' => bcrypt('admin'),
                'idgroup' => 1,
               
            ]);

            DB::table('users')->insert([
                'name' => 'Hacker',
                'email' => 'hack@gmail.com',
                'password' => bcrypt('admin'), 
                'idgroup' => 0,
              
            
            ]);
    }
    
    }

