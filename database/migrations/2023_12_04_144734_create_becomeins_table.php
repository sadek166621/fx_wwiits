<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBecomeinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('becomeins', function (Blueprint $table) {
            $table->id();
            $table->string('b_first_name');
            $table->string('b_last_name');
            $table->string('b_account_type');
            $table->string('b_professional_title');
            $table->string('b_phone_number');
            $table->string('b_address');
            $table->string('b_bio');
            $table->unsignedTinyInteger('status')->default(1)->comment('1=> Active, 0=>Inactive');
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
        Schema::dropIfExists('becomeins');
    }
}
