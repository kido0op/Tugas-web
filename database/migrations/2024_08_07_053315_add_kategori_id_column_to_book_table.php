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
            //menambahkan kategori_id pada table book
           $table->unsignedBigInteger('kategori_id')->requeired()
           ->after('id');
           //dan membuat foreignkey antara table book dan kategori
           $table->foreign('kategori_id')->references('id')
           ->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('book', function (Blueprint $table) {
            //menghapus foreignkey kategori_id
            $table->dropForeign(['kategori_id']);
            //menghapus kolom
            $table->dropColumn('kategori_id');
        });
    }
};
