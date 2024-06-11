<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositReturnHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit_return_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('deposit_id');
            $table->decimal('previous_amount', 10,4);
            $table->decimal('returning_amount', 10,4);
            $table->decimal('current_amount', 10,4);
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
        Schema::dropIfExists('deposit_return_histories');
    }
}
