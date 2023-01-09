<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 
use App\Models\Prodi; 
use App\Models\Post; 
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        User::create([
            'name' => 'Lalu Isari ',
            'username' => "laluisari",
            'email' => 'laluisari@gmail.com',
            'password' => bcrypt('password')
        ]);

      

    
        
    }
}
