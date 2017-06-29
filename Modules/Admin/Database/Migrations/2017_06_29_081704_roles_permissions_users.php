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
            $table->string('name');
            $table->string('slug')->unique();

        });

        Schema::create('permissions_roles', function (Blueprint $table) {

            $table->unsignedInteger('permission_id');
            $table->unsignedInteger('role_id');

            $table->unique(['permission_id', 'role_id']);

            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

        });

        Schema::create('users', function (Blueprint $table) {
            
            $table->increments('id');
            $table->unsignedInteger('role_id')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('firstname');
            $table->string('lastname');
            $table->date('date_of_birth');
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
