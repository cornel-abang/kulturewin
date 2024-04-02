<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->string('first_name')->nullable(true)->change();
            $table->string('middle_name')->nullable(true)->change();
            $table->string('last_name')->nullable(true)->change();
            $table->string('stage_name')->nullable(true)->change();
            $table->string('phone')->nullable(true)->change();
            $table->string('email')->nullable(true)->change();
            $table->string('dob')->nullable(true)->change();
            $table->string('street')->nullable(true)->change();
            $table->string('city')->nullable(true)->change();
            $table->string('state')->nullable(true)->change();
            $table->string('zip_code')->nullable(true)->change();
            $table->string('country')->nullable(true)->change();
            $table->boolean('with_label')->nullable(true)->change();
            $table->string('pro_affil')->nullable(true)->change();
        });
    }

    public function down(): void
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->string('first_name')->nullable(false)->change();
            $table->string('middle_name')->nullable(false)->change();
            $table->string('last_name')->nullable(false)->change();
            $table->string('stage_name')->nullable(false)->change();
            $table->string('phone')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->string('dob')->nullable(false)->change();
            $table->string('street')->nullable(false)->change();
            $table->string('city')->nullable(false)->change();
            $table->string('state')->nullable(false)->change();
            $table->string('zip_code')->nullable(false)->change();
            $table->string('country')->nullable(false)->change();
            $table->boolean('with_label')->nullable(false)->change();
            $table->string('pro_affil')->nullable(false)->change();
        });
    }
};
