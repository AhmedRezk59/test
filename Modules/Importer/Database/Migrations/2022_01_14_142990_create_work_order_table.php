<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('work_order', function (Blueprint $table) {
                $table->id();
                $table->string('work_order_number');
                $table->string('external_id');
                $table->string('priority');
                $table->string('category');
                $table->string('fin_loc');
            });
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
    }
}
