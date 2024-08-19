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
        Schema::table('students', function (Blueprint $table) {
           //menambahkan class_id pada table student
           $table->unsignedBigInteger('class_id')->requeired()
           ->after('nis');
           //dan membuat foreignkey antara table student dan class
           $table->foreign('class_id')->references('id')
           ->on('class')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //menghapus foreignkey class_id
            $table->dropForeign(['class_id']);
            //menghapus kolom
            $table->dropColumn('class_id');
        });
    }
};
