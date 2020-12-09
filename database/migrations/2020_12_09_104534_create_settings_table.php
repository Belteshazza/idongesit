<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('wdev')->nullable();
            $table->text('wdesign')->nullable();         
            $table->text('frespon')->nullable();
            $table->text('ecom')->nullable();
            $table->text('pweb')->nullable();
            $table->text('customs')->nullable();
            $table->text('about1')->nullable();
            $table->text('about2')->nullable();
            $table->text('about3')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
