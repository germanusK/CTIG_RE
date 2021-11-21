<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->string('name');
            $table->integer('status')->default(1);//0 = taken, 1 = available
            $table->string('block_number')->unique();
            $table->string('description');
            $table->binary('image');
            $table->timestamps();
            $table->unsignedBigInteger('location_id')->nullable();
            // $table->foreign('location_id')->references('id')->on('locations');
            $table->unsignedBigInteger('category_id')->nullable();
            // $table->foreignId('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('site_id')->nullable();
            // $table->foreignId('site_id')->references('id')->on('sites');
        });

        Schema::table('assets', function (Blueprint $table) {
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
