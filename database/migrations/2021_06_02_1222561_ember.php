<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('behalf',100);
            $table->string('fname',100);
			$table->string('lname',100);
			$table->string('gender',100);
            $table->string('dob',100);
			$table->string('email',100);
			$table->string('mobile',100);
			$table->string('password',100);
			$table->string('otp',100)->nullable();
           $table->enum('otp_verify_status', ['0', '1'])->comment('0=>Non Verify, 1=>Verify')->default('0');
           $table->enum('status', ['0', '1'])->comment('0=>Inactive, 1=>Active')->default('1');
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
