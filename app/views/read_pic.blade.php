<!DOCTYPE html>
<html>
<head>

	<title>Retrieve a Picture</title>
	<meta charset='utf-8'>
	
</head>
<body>

	<hl><b>Retrieve a Picture and display it</b><br><br></hl> 
	
<!-- Display error messages if any errors found during validation  	-->
	
	<ul class="errors">	
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    </ul> 
	
<!-- Create the form to Retrieve a Picture  -->	
		
	{{ Form::open(array('url' => '/read_pic', 'method' => 'POST')) }}

		{{ Form::label('query','Enter the Picture Title ') }}
		
	    {{ Form::text('query'); }}
		
		{{ Form::submit('retrieve'); }}
		
		<br>

	{{ Form::close() }}
	
	
</body>
</html>