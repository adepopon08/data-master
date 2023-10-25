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
        Schema::create('tb_rombel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rombel',10);

            $table->foreignId('id_ptk_walas')
            ->index()
            ->nullable()
            ->constrained('tb_ptk')
            ->onDelete('set null')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_rombel');
    }
};
