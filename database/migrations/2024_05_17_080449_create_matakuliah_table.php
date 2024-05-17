<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('nama_matakuliah',30);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matakuliah');
    }
};
