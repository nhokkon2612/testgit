<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('squared_id');
            $table->foreign('squared_id')->references('id')->on("level_squareds");
            $table->string('detail_address');
            $table->unsignedBigInteger('bedroom_id');
            $table->foreign('bedroom_id')->references('id')->on("bedrooms");
            $table->unsignedBigInteger('bathroom_id');
            $table->foreign('bathroom_id')->references('id')->on("bathrooms");
            $table->unsignedBigInteger('price_id');
            $table->foreign('price_id')->references('id')->on("level_prices");
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on("categories");
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on("room_statuses");
            $table->string('description')->nullable();
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
        Schema::dropIfExists('homes');
    }
}
