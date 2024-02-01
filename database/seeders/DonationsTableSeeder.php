<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DonationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        DB::table('donations')->insert([
            'user_id' => 1,
            'amount' => 100.00,
            'receipt' => 'donation_receipt_1.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('donations')->insert([
            'user_id' => 2,
            'amount' => 50.00,
            'receipt' => 'donation_receipt_2.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('donations')->insert([
            'user_id' => 3,
            'amount' => 200.00,
            'receipt' => 'donation_receipt_3.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
