<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
	# Create the authors table
    Schema::create('owners', function($table) {
	
            # AI, PK
            $table->increments('id');
			
            # created_at, updated_at columns
            $table->timestamps();
						
            # General data...
            $table->string('pic_owner_name');
						
            # Define foreign keys...
            # none needed

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
		Schema::drop('owners');
	}

}
