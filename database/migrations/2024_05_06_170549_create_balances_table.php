<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->decimal('amount', 10, 4);
            $table->string('payment_method');
            $table->string('account_number');
            $table->string('transaction_id')->nullable();
            $table->string('paid_to')->nullable();
            $table->tinyInteger('status')->default(0)->comment('1=>Approved, 0=>Pending, 2=>Rejected');

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
        Schema::dropIfExists('balances');
    }
}
