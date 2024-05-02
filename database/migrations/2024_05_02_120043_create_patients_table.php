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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('kecematan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('umur');
            $table->char('nik',16)->unique();
            $table->date('tanggal_lahir');
            $table->date('tempat_lahir');
            $table->char('rt',2);
            $table->char('rw',2);
            $table->integer('agama');
            $table->integer('golongan_darah');
            $table->integer('kewarganegaraan');
            $table->string('pekerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
