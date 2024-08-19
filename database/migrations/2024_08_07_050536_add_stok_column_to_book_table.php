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
        Schema::table('book', function (Blueprint $table) {
            //menambahkan kolom stok setelah penulis
            $table->string('stok', 15)->requered()->after('penulis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('book', function (Blueprint $table) {
            $table->dropColumn('stok');;
        });
    }
};
