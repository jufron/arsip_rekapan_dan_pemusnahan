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
        Schema::create('arsip', function (Blueprint $table) {
            $table->id();
            $table->string('no_arsip', 50);
            $table->string('no_surat', 20);
            $table->date('tanggal_surat', 20);
            $table->string('perihal', 200);
            $table->unsignedBigInteger('disposisi_id');
            $table->string('file', 150)->nullable();
            $table->string('tahun', 20); // get from column tanggal_surat
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('disposisi_id')->references('id')->on('disposisi')
                 ->cascadeOnUpdate()
                 ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arsip');
    }
};
