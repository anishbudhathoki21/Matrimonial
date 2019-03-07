<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            
          
            $table->string('fname',200);
             $table->string('lname',200);
              $table->string('address',200);
               $table->string('religion',200);
                $table->string('email')->unique();
                $table->string('caste',200);
                $table->date('dateofbirth');
                $table->string('gender',200);
                
                $table->string('education',200);
                $table->string('occupation',200);
                $table->string('height',200);
           $table->string('username',200);
            $table->string('password',200);
           $table->integer('userType_id')->unsigned();
            $table->foreign('userType_id')->references('id')->on('user_type');
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
}
