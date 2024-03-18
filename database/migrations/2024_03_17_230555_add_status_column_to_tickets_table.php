<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->integer('sold_amount')->default(0);
            $table->integer('price')->change();
            $table->integer('qty')->change();
        });
    }

    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropColumn('sold_amount');
            $table->string('price')->change();
            $table->string('qty')->change();
        });
    }
};
