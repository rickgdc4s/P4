<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('_master');
});

Route::get('/add_owner', function()
{
	// Add a new owner to the Owner table in the Picture Database
	//  Obtain the entered Owner Name
	return View::make('add_owner');
});

Route::post('/add_owner', function()
{
    // Using the Owner Name entered in the add_owner blade view, the user
	//  is routed here and the New Owner name is added to the Owner table in
	//   the Picture DB and posted to the add_owner blade view
	
	// Get the name of the owner
    $query = Input::get('owner');
	echo "Owner input = " . $query . ".<br>";
	
		// Create the validation constraint set
	$rules = array();
	
	// Create the Validator instance on the query field
	//   The number of characters entered must be between 1 and 20
	$validation = Validator::make(
	   array(
	     'owner' => Input::get( 'owner' ),
		 ),
	   array(
	     'owner' => array( 'required', 'Min:1', 'Max:20' )
		 )
	);
	
	// If an error occurs, print an error message on the random user page
	if ($validation->fails()) {
	   return Redirect::to('/add_owner')->withErrors($validation->messages());
	   }
	
	// Get all of the Owner entries in the Owner table in the Picture DB
	$owner = Owner::all();
	
	// Initialize the found value to false
	$found_Owner = false;
	
	// Check if the Owner name entered exists in the Owner table of the Picture DB
    if ($owner->isEmpty() != TRUE) {
        echo "In if" ."<br>";
        foreach ($owner as $owner1) {	
		   if ($owner1->pic_owner_name == $query) {
		      echo "Owner Found - Owner already exists"."<br>";
		      $found_Owner = true;
			  break;
			}   // end ... if ($owner1->pic_owner_name == $query)
		}   // end ... foreach ($owner as $owner1)
	}   // end ... if ($owner->isEmpty() != TRUE)
	
    // If the entered Owner does not already exist in the Owner table
	//   Add the entered Owner to the Owner table in the Picture DB
   	if ($found_Owner == false) {
       $newOwner = new Owner;	
	   $newOwner->pic_owner_name = $query;
       $newOwner->save();
	}
	   
	// Send the values of the query (he entered Owner), and the
	//   found_Owner boolean checkbox, to the add owner blade 
	//   view to be processed and posted
	return View::make('gen_add_owner')
		 ->with('query', $query)
		 ->with('found_Owner', $found_Owner);
});		 

Route::get('/add_pic', function()
{
	// Add a new picture to the Picture table in the Picture Database
	//   and add the image file to the web server storage directory
	// Browse to the Picture's Location and Name, enter the owner of 
	//  the picture, and the date it was taken
	return View::make('add_pic');
});

Route::post('/add_pic', function()
{
	// Obtain the Owner name entered for the picture, and the 
	//  entered date that the picture was taken
	$pic_owner = Input::get('pic_owner');
	$pic_date = Input::get('date');
	
	// Obtain the picture image
	$pic_real_image = Input::file('image');
	
	// Get the picture name
	$pic_name = $pic_real_image->getClientOriginalName();
	
	// Create the validation constraint set
	$data = Input::all();
	
	// Create the rules array for the Owner and the date
	$rules = array(
	     'pic_owner' => array( 'required', 'Min:1', 'Max:10' ),
		 'date' => array( 'required', 'date' )
		 );	
	
	// Create the Validator instance on the query field
	//   The number of random users requested must be between 1 and 99
	$validation = Validator::make($data, $rules);
	
	//If an error occurs, print an error message on the random user page
	if ($validation->fails()) {
	   return Redirect::to('/add_pic')->withErrors($validation->messages());
	   }
	
	// Get all of the Picture entries in the Picture table in the Picture DB
	$pic_exists = Pic::all();
	
	// Initialize the booleans to false 
	$found_Pic = false;
	$found_Owner = false;
	
	// Check if the Picture entered already exists in the Picture table of the Picture DB
    if ($pic_exists->isEmpty() != TRUE) {
        echo "In if" ."<br>";
        foreach ($pic_exists as $pic_exists1) {	
		   if ($pic_exists1->pic_name == $pic_name) {
		      echo "Pic Found - Picture already exists"."<br>";
		      $found_Pic = true;
			  break;
			  }   // end ... if ($pic_exists1->pic_name == $pic_name)
		}   // end .... foreach ($pic_exists as $pic_exists1)
	}   // end ... if ($pic_exists->isEmpty() != TRUE)

    // If the picture does not already exist in the Picture table
	//   Add the entered Picture to the Picture table in the Picture DB	
	// If the picture does already exist in the Picture table, even if it
	//   exists as a picture of another owner, it will not be entered again 
    if ($found_Pic == false) {
	    echo $pic_name."<br>";
	    echo $pic_owner."<br>";
	    echo $pic_date."<br>";

        $pic = new Pic;
        $pic->pic_name = $pic_name;
        $pic->owner_name = $pic_owner;
        $pic->pic_date = $pic_date;

	    // Get the corresponding Owner entry in the Owner table in the Picture DB
        $owner = Owner::where('pic_owner_name', '=', $pic_owner)->get();

        echo "Owner = " . $owner . ".<br>";

        $owner1 = new Owner;
        $owner1 = $owner;

        echo "Owner1 = " . $owner1 . ".<br>";

//echo "Pic filename = " . $pic_name . ".<br>";  
//$pic_real_image->move('assets/', $pic_name);
			  		  
//$pic->owner()->associate($owner1);
//$pic->save();

	    // Check if the Owner name entered exists in the Owner table of the Picture DB
	    //  If the Owner name entered does not exist in the Owner table of the Picture DB,
	    //    do not add the picture to the Picture DB
		// If the owner exists as well as the picture
		//   Add the picture name to the Picture table of the Picture DB
		//    and move the image to the storage location on the web server
        if ($owner->isEmpty() != TRUE) {
            echo "In if" ."<br>";
	        $count = 0;
	 
            foreach ($owner as $owner1) {
	            echo "Owner = " . $owner1->pic_owner_name . ".<br>";
		
	            if ($found_Owner == false) {
	                if ($owner1->pic_owner_name == $pic_owner) {
		                echo "Owner Found"."<br>";
			            $found_Owner = true;
			  			  
			            $pic_real_image->move('assets/', $pic_name);
			  			  
			            $pic->owner()->associate($owner1);
			            $pic->save();
		            }   // end ... if ($owner1->pic_owner_name == $pic_owner)
		        }   // end ... if ($found_Owner == false)
	        }   // end ... foreach ($owner as $owner1)
	    }   // end ... if ($owner->isEmpty() != TRUE)	
    }	// end ... if ($found_Pic == false)

	return View::make('gen_add_pic')
	        ->with('pic_name', $pic_name)
			->with('found_Pic', $found_Pic)
			->with('found_Owner', $found_Owner);

});

Route::get('/read_pic', function()
{
	// Retrieve a previously entered picture name from the Picture table in the Picture Database
	//  and view it in the Browser
	return View::make('read_pic');
});

Route::post('/read_pic', function()
{
    // Obtain the entered name of the picture
	$pic_name = Input::get('query');
	echo $pic_name."<br>";
	
	// Create the validation constraint set
	$rules = array();
	
	// Create the Validator instance on the query field
	//   The number of random users requested must be between 1 and 99
	$validation = Validator::make(
	   array(
	     'query' => Input::get( 'query' ),
		 ),
	   array(
	     'query' => array( 'required', 'Min:1', 'Max:10' )
		 )
	);
	
	//If an error occurs, print an error message on the random user page
	if ($validation->fails()) {
	   return Redirect::to('/add_owner')->withErrors($validation->messages());
	   }	
	
	// Initialize the picture owner and date values to null 
	//  The picture entered for retrieval may not exist in the 
	//  Picture table of the Picture DB
    $pic_owner = null;
	$pic_date = null;
	
	// Get the name of the picture
    $pic = Pic::where('pic_name', '=', $pic_name)->get();
   
    // initialize boolean to false
    $found_Pic = false;

	// Check if the Picture entered for retrieval exists in the Picture table of the Picture DB
    if ($pic->isEmpty() != TRUE) {
        echo "In if" ."<br>";
		
        foreach ($pic as $pic1) {
	        echo "Pic = " . $pic1->pic_name . ".<br>";
			
	       if ($found_Pic == false) {
		   
	            if ($pic1->pic_name == $pic_name) {
		            echo "Pic Found"."<br>";
					
			        $found_Pic = true;
			  	    $pic_owner = $pic1->owner_name;
	                $pic_date = $pic1->pic_date;
		        }   // end ... if ($pic1->pic_name == $pic_name)
		    }   // end ... if ($found_Pic == false)
		}   // end ... foreach ($pic as $pic1
	}   // end ... if ($pic->isEmpty() != TRUE)
	
	return View::make('gen_read_pic')
		       ->with('pic_name', $pic_name)
			   ->with('pic_owner', $pic_owner)
			   ->with('pic_date', $pic_date)
			   ->with('found_Pic', $found_Pic);

});

Route::get('/update_pic', function()
{

	// Update a previously entered picture in the Picture table in the Picture Database	
	return 'In route-get update_pic';
	//return View::make('update_pic');
	
});

Route::get('/delete_pic', function()
{
	// Delete a previously entered picture name from the Picture table in the Picture Database
	//  and from the web server storage location		
	return View::make('delete_pic');
});

Route::post('/delete_pic', function()
{
    // Obtain the Entered name of the picture
	$pic_name = Input::get('query');
	echo $pic_name."<br>";
	
		// Create the validation constraint set
	$rules = array();
	
	// Create the Validator instance on the query field
	//   The number of random users requested must be between 1 and 99
	$validation = Validator::make(
	   array(
	     'query' => Input::get( 'query' ),
		 ),
	   array(
	     'query' => array( 'required', 'Min:1', 'Max:10' )
		 )
	);
	
	//If an error occurs, print an error message on the random user page
	if ($validation->fails()) {
	   return Redirect::to('/add_owner')->withErrors($validation->messages());
	   }		
	
	// Get the Picture entry in the Picture table in the Picture DB
    $pic = Pic::where('pic_name', '=', $pic_name)->get();
   
    echo "Picture = " . $pic . ".<br>";

	// Initialize the boolean to false
	//  The entered Picture name may not exist in the Picture table of the Picture DB
    $found_Pic = false;

	// Check if the Picture entered for deletion exists in the Picture table of the Picture DB
	//  If it does, delete it from the Picture table of the Picture DB
	//   and from the storage directory on the web server
    if ($pic->isEmpty() != TRUE) {
        echo "In if" ."<br>";
		
        foreach ($pic as $pic1) {
	        echo "Pic = " . $pic1->pic_name . ".<br>";
			
	       if ($found_Pic == false) {
	            if ($pic1->pic_name == $pic_name) {
			        echo "Pic Found"."<br>";
					
			        $found_Pic = true;
			        $pic1->delete();
				
				    File::delete('assets/'.$pic_name);
		        }   // end ... if ($pic1->pic_name == $pic_name)
		    }   // end ... if ($found_Pic == false)
		}   // end ... foreach ($pic as $pic1)
	}   // end ... if ($pic->isEmpty() != TRUE) 
	
	return View::make('gen_delete_pic')
		       ->with('pic_name', $pic_name)
			   ->with('found_Pic', $found_Pic);

});


Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});

Route::get('/trigger-error',function() {

    # Class Foobar should not exist, so this should create an error
    $foo = new Foobar;

});

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo Pre::render($results);

});

# /app/routes.php
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

