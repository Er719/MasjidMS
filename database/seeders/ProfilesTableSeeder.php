<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            'user_id' => 1,
            'no_kad_pengenalan' => '123456789012',
            'kewarganegaraan' => 'Malaysian',
            'alamat_dalam_kad_pengenalan' => 'Sample address in ID card',
            'alamat_tempat_tinggal_sekarang' => 'Sample current address',
            'no_telefon' => '0123456789',
            'status_perkahwinan' => 'Single',
            'jenis_pemilikan_kediaman' => 'Rented',
            'kategori_pekerjaan' => 'Professional',
            'surau_kariah' => 'Sample Surau',
            'bilangan_isi_rumah' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
