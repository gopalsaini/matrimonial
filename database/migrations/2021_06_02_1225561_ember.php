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
        Schema::table('users', function (Blueprint $table) {
            $table->string('behalf',100)->nullable()->after('password');
			$table->string('gender',100)->nullable()->after('behalf');
            $table->string('dob',100)->nullable()->after('gender');
			$table->string('mobile',100)->nullable()->after('dob');
			$table->string('otp',100)->nullable()->after('mobile');
            $table->enum('otp_verify_status', ['0', '1'])->comment('0=>Non Verify, 1=>Verify')->default('0')->after('otp');
            $table->enum('status', ['0', '1'])->comment('0=>Inactive, 1=>Active')->default('1')->after('otp_verify_status');
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
