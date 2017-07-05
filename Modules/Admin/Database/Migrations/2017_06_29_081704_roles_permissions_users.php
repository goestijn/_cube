<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RolesPermissionsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('roles', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();

        });

        Schema::create('permissions', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('role_id');
            $table->string('name');

            $table->unique(['role_id', 'name']);

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

        });

        Schema::create('users', function (Blueprint $table) {
            
            $table->increments('id');
            $table->unsignedInteger('role_id')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('fullname');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->timestamps();
            $table->softDeletes();
        
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');

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
        Schema::dropIfExists('permissions_roles');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');

    }
}
