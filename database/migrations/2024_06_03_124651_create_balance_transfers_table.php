<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalanceTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_transfers', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->integer('transfer_type')->comment('1=>Self Transfer, 2=>Member Transfer');
            $table->decimal('amount', 10,4);
            $table->integer('transferred_to')->nullable();
            $table->integer('transfer_from')->comment('1=>Profit, 2=>Affiliate, 3=>Internal')->nullable();
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
        Schema::dropIfExists('balance_transfers');
    }
}
