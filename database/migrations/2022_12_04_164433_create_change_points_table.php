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
        Schema::create('change_points', function (Blueprint $table) {
            $table->id();
            $table->date('occur_date');
            $table->date('data_entry_date');
            $table->foreignId('factory_id');
            $table->foreignId('part_number_id');
            $table->string('lot');
            $table->integer('prod_qty');
            $table->string('reporter');
            $table->string('shift');
            $table->foreignId('machine_id');
            $table->foreignId('cp_type_id');
            $table->string('description');
            $table->string('remark');
            $table->string('handle_result');
            $table->string('status');
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
        Schema::dropIfExists('change_points');
    }
};
