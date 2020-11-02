<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_packages', function (Blueprint $table) {
            $table->id();
            $table->string('pkg_name');
            $table->string('genre');
            $table->string('deliverable');
            $table->string('service_type');
            $table->string('shoot_duration');
            // $table->string('resourceassistance');
            $table->string('timeline');
            $table->mediumText('description');
            $table->string('base_price');
            $table->boolean('price_negotiatable');
            $table->boolean('is_deleted');
            $table->boolean('highlights');
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
        Schema::dropIfExists('p_packages');
    }
}
