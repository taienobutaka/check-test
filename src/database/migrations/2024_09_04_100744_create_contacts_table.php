<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
        $table->string('id');
        $table->string('categry_id');
        $table->string('first_name');
        $table->string('last_name');
        $table->string('gender');
        $table->string('email');
        $table->string('email');
        $table->string('tel', 11);
        $table->string('address');
        $table->string('building');
        $table->string('detail');
        $table->string('created_at');
        $table->string('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
