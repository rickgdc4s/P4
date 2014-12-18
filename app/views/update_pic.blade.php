<!DOCTYPE html>
<html>
<head>

	<title>Update a Picture's Date in the Picture Database</title>
	<meta charset='utf-8'>
	
</head>
<body>

<!-- Display error messages if any errors found during validation 	-->

	<ul class="errors">
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    </ul>  

<!-- Create the form to Update the Picture  -->

		<hl><b>Update a Picture's Date</b><br><br></hl> 
		
		{{ Form::open(array('url' => '/update_pic', 'method' => 'POST')) }} 

        {{ Form::label('query', 'Enter the picture name') }}
  		
		{{ Form::text('query') }}  
		
		<br><br>
				
		{{ Form::label('date','Enter the New Date of the Picture YYYY-MM-DD ') }} 
	
		{{ Form::text('date'); }} 			

		
		<br><br>		
		
		{{ Form::submit('Save') }}

		{{ Form::close() }}				
		
	
</body>
</html>