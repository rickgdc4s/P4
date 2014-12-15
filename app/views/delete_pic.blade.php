<!DOCTYPE html>
<html>
<head>

	<title>Delete a Picture</title>
	<meta charset='utf-8'>
	
</head>
<body>

	<hl><b>Delete a Picture</b><br><br></hl> 
	
<!-- Display error messages if any errors found during validation  	-->
	
	<ul class="errors">	
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    </ul> 
	
<!-- Create the form to obtain the number of users, and whether to also generate birthday and 
      profile dummy text on the random_user blade view page  -->	
		
	{{ Form::open(array('url' => '/delete_pic', 'method' => 'POST')) }}

		{{ Form::label('query','Enter the Picture Title ') }}
		
	    {{ Form::text('query'); }}
		
		{{ Form::submit('delete'); }}
		
		<br>
		
<!--		{{ Form::label('birthday', 'Birthday') }}
			
		{{ Form::checkbox('birthday', 'Birthday') }}	

		<br>
		
		{{ Form::label('profile', 'Profile') }}
			
		{{ Form::checkbox('profile', 'Profile') }}			 -->

	{{ Form::close() }}
	
	
</body>
</html>