<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Note;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $note = Note::updateOrCreate(
            ['user_name' => 'Jamal Harvard',
            'short_description' => 'First note by Jamal.',
            'rating' => 5, 
            'hashtag_list' => '#spring#2023#e15p3',
            'long_description' => 'First note by Jamal test user.',
            'is_active' =>1]);

        $note = Note::updateOrCreate(
            ['user_name' => 'Jamal Harvard',
            'short_description' => 'Hide me note by Jamal.',
            'rating' => 5, 
            'hashtag_list' => '#spring#2023#e15p#hideme',
            'long_description' => 'Hide me note by Jamal test user.',
            'is_active' =>1]);

        $note = Note::updateOrCreate(
            ['user_name' => 'Jamal Harvard',
            'short_description' => 'Delete me note by Jamal.',
            'rating' => 5, 
            'hashtag_list' => '#spring#2023#e15p3#deletme',
            'long_description' => 'Delete me note by Jamal test user.',
            'is_active' =>1]);

            $note = Note::updateOrCreate(
                ['user_name' => 'Jill Harvard',
                'short_description' => 'First note by Jill.',
                'rating' => 5, 
                'hashtag_list' => '#spring#2023#e15p3',
                'long_description' => 'First note by Jill test user.',
                'is_active' =>1]);
    
            $note = Note::updateOrCreate(
                ['user_name' => 'Jill Harvard',
                'short_description' => 'Hide me note by Jill.',
                'rating' => 5, 
                'hashtag_list' => '#spring#2023#e15p#hideme',
                'long_description' => 'Hide me note by Jill test user.',
                'is_active' =>1]);
    
            $note = Note::updateOrCreate(
                ['user_name' => 'Jill Harvard',
                'short_description' => 'Delete me note by Jill.',
                'rating' => 5, 
                'hashtag_list' => '#spring#2023#e15p3#deletme',
                'long_description' => 'Delete me note by Jill test user.',
                'is_active' =>1]);
        
        
    }
}