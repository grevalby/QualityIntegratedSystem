<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('part_number')->unique();
            $table->foreignId('product_type_id');
            $table->foreignId('project_id');
            $table->string('project_detail');
            $table->foreignId('1st_machine_id');
            $table->foreignId('2nd_machine_id')->nullable();
            $table->foreignId('3rd_machine_id')->nullable();
            $table->string('material')->nullable();
            $table->string('assembly_site')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('part_numbers');
    }
};
