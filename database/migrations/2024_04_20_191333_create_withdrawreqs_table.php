<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawreqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawreqs', function (Blueprint $table) {
            $table->id();
            $table->string('member_id')->nullable();
            $table->string('package_id')->nullable();
            $table->string('withdraw_option')->nullable();
            $table->string('account_number')->nullable();
            $table->string('amount')->nullable();
            $table->string('package_name')->nullable();
            $table->string('admin_note')->nullable();
            $table->tinyInteger('status')->default('0')->commnet('1=>Success , 0=>Pending');
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
        Schema::dropIfExists('withdrawreqs');
    }
}
