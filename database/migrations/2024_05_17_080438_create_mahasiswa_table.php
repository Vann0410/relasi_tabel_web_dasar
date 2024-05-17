<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('npm',12)->unique();
            $table->string('nama_mahasiswa',30)->nillabel();
            $table->date('tanggal_lahir')->nillabel();
            $table->text('alamat');
            $table->enum('jk',['L','P']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
