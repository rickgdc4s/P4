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
	
<!-- Create the form to Delete a Picture  -->	
		
	{{ Form::open(array('url' => '/delete_pic', 'method' => 'POST')) }}

		{{ Form::label('query','Enter the Picture Title ') }}
		
	    {{ Form::text('query'); }}
		
		{{ Form::submit('delete'); }}
		
		<br>

	{{ Form::close() }}
	
	
</body>
</html>