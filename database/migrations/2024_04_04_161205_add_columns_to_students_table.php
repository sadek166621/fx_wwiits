<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->integer('joining_reason')->after('id')->comment('1=>Forex Training and Affiliation, 2=>Forex Training and Job');
            $table->string('payment_method')->after('gender');
            $table->string('payment_number')->after('payment_method');
            $table->string('transaction_id')->after('payment_number');
            $table->decimal('payment_amount')->after('transaction_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
}
