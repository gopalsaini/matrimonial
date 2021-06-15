<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
			$table->longtext('introduction');
			$table->string('email');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('gender');
			$table->string('dob');
			$table->integer('phone');
			$table->string('on_behalf');
			$table->string('children');
			$table->integer('present_country_id');
			$table->integer('present_state_id');
			$table->integer('present_city_id');
			$table->integer('present_postal_code');
			$table->string('marital_status');
			$table->string('disability');
			$table->string('body_art');
			$table->string('blood_group');
			$table->string('complexion');
			$table->string('hair_color');
			$table->string('eye_color');
			$table->integer('weight');
			$table->integer('height');
			$table->string('mothere_tongue');
			$table->string('known_languages');
			$table->string('hobbies');
			$table->string('interests');
			$table->string('music');
			$table->string('books');
			$table->string('movies');
			$table->string('tv_shows');
			$table->string('sports');
			$table->string('fitness_activities');
			$table->string('cuisines');
			$table->string('dress_styles');
			$table->string('affection');
			$table->string('humor');
			$table->string('political_views');
			$table->string('religious_service');
			$table->integer('birth_country_id');
			$table->integer('recidency_country_id');
			$table->integer('growup_country_id');
			$table->string('immigration_status');
			$table->string('address_type');
			$table->integer('member_religion_id');
			$table->integer('member_caste_id');
			$table->integer('member_sub_caste_id');
			$table->string('ethnicity');
			$table->string('personal_value');
			$table->integer('family_value_id');
			$table->string('community_value');
			$table->string('diet');
			$table->string('smoke');
			$table->string('living_with');
			$table->string('sun_sign');
			$table->string('moon_sign');
			$table->string('time_of_birth');
			$table->string('city_of_birth');
			$table->integer('permanent_country_id');
			$table->integer('permanent_state_id');
			$table->integer('permanent_city_id');
			$table->string('permanent_postal_code');
			$table->string('father');
			$table->string('mother');
			$table->string('sibling');
			$table->string('general');
			$table->string('residence_country_id');
			$table->string('partner_height');
			$table->string('partner_weight');
			$table->string('partner_marital_status');
			$table->string('partner_children_acceptable');
			$table->integer('partner_religion_id');
			$table->integer('partner_caste_id');
			$table->integer('partner_sub_caste_id');
			$table->integer('language_id');
			$table->string('pertner_education');
			$table->string('partner_profession');
			$table->string('smoking_acceptable');
			$table->string('drinking_acceptable');
			$table->string('partner_diet');
			$table->string('partner_body_type');
			$table->string('partner_personal_value');
			$table->string('partner_manglik');
			$table->integer('partner_country_id');
			$table->integer('partner_state_id');
			$table->string('pertner_complexion');
			$table->string('deacticvation_status');
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
