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
        Schema::create('admin_ids', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('logo');
            $table->string('instagram');
            $table->string('tiktok');
            $table->string('youtube');
            $table->string('facebook');
            $table->string('kontak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_ids');
    }
};
