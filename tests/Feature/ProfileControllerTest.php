<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function testStoreMethod()
    {
        // Assuming you have a user logged in
        $user = User::factory()->create();
        Auth::login($user);

        // Prepare data for the request
        $data = [
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
        ];

        // Make a request to the store method
        $response = $this->post(route('profile.store'), $data);

        // Assert the response
        $response->assertRedirect(route('profile')); // Assuming you have a route named 'profile'
        $response->assertSessionHas('success', 'Profile berjaya disimpan!');

        // Assert the data in the database
        $this->assertDatabaseHas('profiles', [
            'user_id' => $user->id,
            'no_kad_pengenalan' => $data['no_kad_pengenalan'],
            'kewarganegaraan' => $data['kewarganegaraan'],
            'alamat_dalam_kad_pengenalan' => $data['alamat_dalam_kad_pengenalan'],
            'alamat_tempat_tinggal_sekarang' => $data['alamat_tempat_tinggal_sekarang'],
            'no_telefon' => $data['no_telefon'],
            'status_perkahwinan' => $data['status_perkahwinan'],
            'jenis_pemilikan_kediaman' => $data['jenis_pemilikan_kediaman'],
            'kategori_pekerjaan' => $data['kategori_pekerjaan'],
            'surau_kariah' => $data['surau_kariah'],
            'bilangan_isi_rumah' => $data['bilangan_isi_rumah'],
        ]);
    }
}