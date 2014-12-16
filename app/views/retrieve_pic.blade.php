<!DOCTYPE html>
<html>
<head>

	<title>Download a Picture</title>
	<meta charset='utf-8'>
	
</head>
<body>

	<hl><b>Download a Picture</b><br><br></hl> 
	
<!-- Display error messages if any errors found during validation  	
	
	<ul class="errors">	
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    </ul>  -->
	
<!-- Create the form to obtain the number of users, and whether to also generate birthday and 
      profile dummy text on the random_user blade view page  -->	
		
	{{ Form::open(array('url' => '/retrieve_pic', 'method' => 'POST', 'files' => true)) }} 

		{{ Form::label('query','Enter the Picture Title ') }}
		
	    {{ Form::text('query'); }}
		
		{{ Form::submit('download'); }}
		
		<br>
		
<!--		{{ Form::label('birthday', 'Birthday') }}
			
		{{ Form::checkbox('birthday', 'Birthday') }}	

		<br>
		
		{{ Form::label('profile', 'Profile') }}
			
		{{ Form::checkbox('profile', 'Profile') }}			 -->

	{{ Form::close() }}
	
	
</body>
</html>