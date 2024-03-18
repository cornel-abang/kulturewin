<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('book_artists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artist_id');
            $table->text('message')->nullable();
            $table->string('book_date');
            $table->string('book_name');
            $table->string('book_email');
            $table->string('book_phone');
            $table->timestamps();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade')->onUpdate('no action');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('book_artists');
    }
};
