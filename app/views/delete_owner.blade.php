<!DOCTYPE html>
<html>
<head>

	<title>Delete an Owner</title>
	<meta charset='utf-8'>
	
</head>
<body>

	<hl><b>Delete an Owner</b><br><br></hl> 
	
<!-- Display error messages if any errors found during validation  	-->
	
	<ul class="errors">	
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    </ul> 
	
<!-- Create the form to Delete an Owner  -->	
		
	{{ Form::open(array('url' => '/delete_owner', 'method' => 'POST')) }}

		{{ Form::label('query','Enter the Owner Name ') }}
		
	    {{ Form::text('query'); }}
		
		{{ Form::submit('delete'); }}
		
		<br>

	{{ Form::close() }}
	
	
</body>
</html>