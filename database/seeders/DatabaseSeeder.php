<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Notes;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Deni',
            'email' => 'deni@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        
        User::create([
            'name' => 'Billy',
            'email' => 'billy@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Rafif Fernanda',
            'email' => 'rafif@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'Tigor Imam',
            'email' => 'tigor@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        Notes::create([
            'user_id' => '1',
            'title'=> 'Welcome Deni',
            'content'=> 'Ini adalah catatan Deni',
        ]);
        
        Notes::create([
            'user_id' => '2',
            'title'=> 'Welcome Billy',
            'content'=> 'Ini adalah catatan Billy',
        ]);

        Notes::create([
            'user_id' => '3',
            'title'=> 'Welcome Rafif',
            'content'=> 'Ini adalah catatan Rafif Fernanda',
        ]);

        Notes::create([
            'user_id' => '4',
            'title'=> 'Welcome Tigor',
            'content'=> 'Ini adalah catatan Tigor',
        ]);


    }
}
