<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
			# Create the pics table
            Schema::create('pics', function($table) {
			
                   # AI, PK
                   $table->increments('id');
			
                   # created_at, updated_at columns
                   $table->timestamps();
			
                   # General data...
                   $table->string('pic_name');
                   $table->integer('owner_id')->unsigned(); # Important! FK has to be unsigned because the PK it will reference is auto-incrementing
				   
				   $table->string('owner_name');
				   
                   //$table->binary('image');
				   $table->string('image');
                   $table->date('pic_date');
		   
                   # Define foreign keys...
                   $table->foreign('owner_id')->references('id')->on('owners');
				   //$table->foreign('owner_id')->references('pic_owner_id')->on('owners');
		   
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
		Schema::drop('pics');
	}

}
