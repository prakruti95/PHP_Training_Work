<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


/* migrate
  migrate:fresh          Drop all tables and re-run all migrations
  migrate:install        Create the migration repository
  migrate:refresh        Reset and re-run all migrations
  migrate:reset          Rollback all database migrations
  migrate:rollback       Rollback the last database migration
  migrate:status         Show the status of each migration


    
  */
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments("id");
            $table->string("email");
            $table->string("password");
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
        Schema::dropIfExists('admins');
    }
};
