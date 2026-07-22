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
        Schema::create('tb_todolist', function (Blueprint $table) {
            $table->id();
            $table->string('task', 255); // menyimpan judul tugas
            $table->date('due_date')->nullable(); // tidak boleh kosong
            $table->boolean('status')->default(false); // false = belum selesai, true = sudah selesai
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_todolist');
    }
};
