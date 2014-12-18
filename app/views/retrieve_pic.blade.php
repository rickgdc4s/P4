<!DOCTYPE html>
<html>
<head>

	<title>Download a Picture</title>
	<meta charset='utf-8'>
	
</head>
<body>

	<hl><b>Download a Picture</b><br><br></hl> 
	

<!-- Create the form to Download a Picture  -->	
		
	{{ Form::open(array('url' => '/retrieve_pic', 'method' => 'POST', 'files' => true)) }} 

		{{ Form::label('query','Enter the Picture Title ') }}
		
	    {{ Form::text('query'); }}
		
		{{ Form::submit('download'); }}
		
		<br>

	{{ Form::close() }}
	
	
</body>
</html>