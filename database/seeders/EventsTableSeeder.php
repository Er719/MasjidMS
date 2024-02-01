<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'user_id' => 1,
            'name' => 'Jumuah Prayer',
            'image' => 'jumuah_prayer.jpg',
            'description' => 'Join us for the weekly Jumu\'ah (Friday) prayer.',
            'date' => now()->addDays(7), // Set the date to 7 days from now
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('events')->insert([
            'user_id' => 1,
            'name' => 'Islamic Lecture Series',
            'image' => 'lecture_series.jpg',
            'description' => 'Attend our ongoing lecture series covering various Islamic topics.',
            'date' => now()->addDays(14), // Set the date to 14 days from now
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('events')->insert([
            'user_id' => 1,
            'name' => 'Community Iftar',
            'image' => 'community_iftar.jpg',
            'description' => 'Join us for a communal Iftar during the blessed month of Ramadan.',
            'date' => now()->addMonths(1), // Set the date to 1 month from now
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('events')->insert([
            'user_id' => 1,
            'name' => 'Quran Recitation Competition',
            'image' => 'quran_competition.jpg',
            'description' => 'Participate in our annual Quran recitation competition.',
            'date' => now()->addMonths(2), // Set the date to 2 months from now
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('events')->insert([
            'user_id' => 1,
            'name' => 'Islamic Arts Exhibition',
            'image' => 'arts_exhibition.jpg',
            'description' => 'Explore the beauty of Islamic arts in our exhibition.',
            'date' => now()->addMonths(3), // Set the date to 3 months from now
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
