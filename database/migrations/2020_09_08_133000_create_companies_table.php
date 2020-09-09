<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('logo', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->string('email_host', 255);
            $table->integer('email_port');
            $table->string('email_username', 255);
            $table->string('email_password', 255);
            $table->text('g_analytics')->nullable();
            $table->text('fb_advertising')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
