<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('partner_id',10);
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
        Schema::dropIfExists('partners');
    }
}
