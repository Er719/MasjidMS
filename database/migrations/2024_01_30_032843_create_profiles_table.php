<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //foreign key
            $table->timestamps();
            $table->string('no_kad_pengenalan');
            $table->string('kewarganegaraan');
            $table->text('alamat_dalam_kad_pengenalan');
            $table->text('alamat_tempat_tinggal_sekarang');
            $table->string('no_telefon');
            $table->string('status_perkahwinan');
            $table->string('jenis_pemilikan_kediaman');
            $table->string('kategori_pekerjaan');
            $table->string('surau_kariah');
            $table->integer('bilangan_isi_rumah');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
