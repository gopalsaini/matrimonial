<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_languages', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->unique();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        
        });
        DB::table('member_languages')->insert(array(
            array(
                'name'=>'Hindi',
            ),
            array(
                'name'=>'English',
            ),
            array(
                'name'=>'Punjabi',
            ),
            array(
                'name'=>'Urdu',
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
        Schema::dropIfExists('member_languages');
    }
}
