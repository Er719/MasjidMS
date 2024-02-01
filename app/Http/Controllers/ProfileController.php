<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'no_kad_pengenalan' => 'required|min:12|max:12',
            'kewarganegaraan' => 'required',
            'alamat_dalam_kad_pengenalan' => 'required',
            'alamat_tempat_tinggal_sekarang' => 'required',
            'no_telefon' => 'required|min:9|max:15',
            'status_perkahwinan' => 'required',
            'jenis_pemilikan_kediaman' => 'required',
            'kategori_pekerjaan' => 'required',
            'surau_kariah' => 'required',
            'bilangan_isi_rumah' => 'required|min:1|max:10'
        ]);

        // Store the profile in the database
        Profile::create([
            'user_id' => Auth::id(), // Use Auth::id() instead of auth()->id()
            'no_kad_pengenalan' => $request->input('no_kad_pengenalan'),
            'kewarganegaraan' => $request->input('kewarganegaraan'),
            'alamat_dalam_kad_pengenalan' => $request->input('alamat_dalam_kad_pengenalan'),
            'alamat_tempat_tinggal_sekarang' => $request->input('alamat_tempat_tinggal_sekarang'),
            'no_telefon' => $request->input('no_telefon'),
            'status_perkahwinan' => $request->input('status_perkahwinan'),
            'jenis_pemilikan_kediaman' => $request->input('jenis_pemilikan_kediaman'),
            'kategori_pekerjaan' => $request->input('kategori_pekerjaan'),
            'surau_kariah' => $request->input('surau_kariah'),
            'bilangan_isi_rumah' => $request->input('bilangan_isi_rumah')
        ]);

        // Redirect back with a success message
        return redirect()->route('profile')->with('success', 'Profile berjaya disimpan!');
    }
}
