<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
                $table->string('age')->nullable();
                $table->string('contact')->nullable();
                $table->string('email')->unique();
                $table->string('password')->nullable();
                     $table->string('google_id')->nullable();
                     $table->string('facebook_id')->nullable();
                    $table->rememberToken();
                $table->timestamps();

          
        
            Schema::table('users', function ($table) {
                
            });

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
        
    }
}
