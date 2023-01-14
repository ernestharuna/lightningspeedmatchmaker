<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); //first name
            $table->string('last_name'); // last name
            $table->string('email')->unique(); // email

            // Questionaire Questions
            // form 1
            $table->dateTime('dob')->nullable(); // date of birth
            $table->string('gender')->nullable(); // gender
            $table->string('orientation')->nullable(); //sexual orientation
            $table->string('relationship_status')->nullable(); // what is your marital status
            $table->string('looking_for')->nullable(); // what are you looking for in a relationship
            // form 2
            $table->integer('height')->nullable(); // height
            $table->integer('weight')->nullable(); ///weight
            $table->string('body_type')->nullable(); // body type
            $table->string('hair_color')->nullable(); // hair color
            $table->lineString('eye_color')->nullable(); // eye color
            $table->string('ethnicity')->nullable(); // ethnicity
            $table->string('religion')->nullable(); // religion
            $table->string('zodiac_sign')->nullable(); // zodiac_sign
            // form 3
            $table->string('first_language')->nullable(); //first language
            $table->string('second_language')->nullable(); // second language
            $table->string('employed')->nullable(); // employment status
            $table->double('income')->nullable(); // income
            $table->string('profession')->nullable(); // What is your profession
            // form 4
            $table->string('pets')->nullable(); // do you have pets
            $table->string('smokes')->nullable(); // do you smoke
            $table->string('drinks')->nullable(); //do you drink
            $table->string('drugs')->nullable(); // do you take hard drugs
            $table->string('date_drug')->nullable(); // would you mind dating someone who does drugs
            $table->string('profile_pic')->nullable(); //upload your profile picture
            $table->string('country')->nullable(); // country of residence
            $table->string('city')->nullable(); // city
            $table->longText('extra')->nullable(); // short note about yourself
            // Questionaire questions end

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
