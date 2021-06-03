<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReligionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('religions', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->timestamps();
        });
        DB::table('religions')->insert(array(
            array(
                'name'=>'Hindu',
            ),
            array(
                'name'=>'Muslim',
            ),
            array(
                'name'=>'Sikh',
            ),
            array(
                'name'=>'Christian',
            ),
            array(
                'name'=>'Parsi',
            ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('religions');
    }
}
