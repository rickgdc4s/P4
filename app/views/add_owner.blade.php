<!DOCTYPE html>
<html>
<head>

	<title>Add a Picture Owner to the Owner Table in the Picture Database</title>
	<meta charset='utf-8'>
	
</head>
<body>

<!-- Display error messages if any errors found during validation 	-->

	<ul class="errors">
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    </ul>  

<!-- Create the form to obtain the number of paragraphs, and to generate the Lorem Ipsum 
      on the lorem_ipsum blade view page  -->

		<hl><b>Add a Picture Owner</b><br><br></hl> 
		
		{{ Form::open(array('url' => '/add_owner', 'method' => 'POST')) }}

		{{ Form::label('owner','Enter the Owner (Max 20 characters) ') }} 
	
		{{ Form::text('owner'); }} 

<!--        {{ Form::label('image', 'Image') }}
  		
		{{ Form::file('image') }}  -->
		
		{{ Form::submit('Save') }}

<!--	    {{ Form::submit('save', array('name' => 'title')) }}  --> 

		{{ Form::close() }}				
		
	
</body>
</html>