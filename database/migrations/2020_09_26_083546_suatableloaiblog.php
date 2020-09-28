<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Suatableloaiblog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loaiblog', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('nhanvien', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('tuyendung', function (Blueprint $table) {
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loaiblog', function (Blueprint $table) {
            //
        });
    }
}
