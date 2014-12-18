<!DOCTYPE html>
<html>
<head>

	<title>Add a Picture to the Picture Database</title>
	<meta charset='utf-8'>
	
</head>
<body>

<!-- Display error messages if any errors found during validation 	-->

	<ul class="errors">
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    </ul>  

<!-- Create the form to Add a Picture  -->

		<hl><b>Add a Picture</b><br><br></hl> 
		
		{{ Form::open(array('url' => '/add_pic', 'method' => 'POST', 'files' => true)) }} 

        {{ Form::label('image', 'Image') }}
  		
		{{ Form::file('image') }}  
		
		<br><br>
		
		{{ Form::label('pic_owner','Enter the owner of the Picture ') }} 
	
		{{ Form::text('pic_owner'); }} 
		
		<br><br>		
		
		{{ Form::label('date','Enter the Date of the Picture YYYY-MM-DD ') }} 
	
		{{ Form::text('date'); }} 			
		
		<br><br>		
		
		{{ Form::submit('Save') }}

		{{ Form::close() }}				
	
</body>
</html>