<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'no_kad_pengenalan' => 'required|min:12|max:12',
            'kewarganegaraan' => 'required|in:Warganegara,Penduduk Tetap,Bukan Warganegara',
            'alamat_dalam_kad_pengenalan' => 'required',
            'alamat_tempat_tinggal_sekarang' => 'required',
            'no_telefon'=> 'required:min:10|max:15',
            'status_perkahwinan' => 'required|in:Bujang,Sudah Berkahwin',
            'jenis_pemilikan_kediaman' => 'required|in:Rumah Sendiri,Menyewa',
            'kategori_pekerjaan' => 'required',
            'surau_kariah' => 'required',
            'bilangan_isi_rumah' => 'required|min:1|max:10'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
