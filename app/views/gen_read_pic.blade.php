<!DOCTYPE html>
<html>
<head>

	<title>(Picture to Retrieve)</title>
	<meta charset='utf-8'>
	
</head>
<body>
	
<!-- Provide a link to return to the home page  -->		
	<li><a href='/'>Return to Home Page</a></li>
	
	<br>
	
	@if ( (!$found_Pic) )
	<h1>Picture Does not exist in the Database</h1>	
	<li><a href='/read_pic'>Try Again - View an Existing Picture from the Database</a></li>	
    @else		

	<h1>Picture Title</h1>
		<h2>Picture Retrieved = {{{ $pic_name }}} </h2>	 
		<h2>Picture Owner = {{{ $pic_owner }}} </h2>	
		<h2>Picture Date = {{{ $pic_date }}} </h2>
				
		{{ HTML::link('http://localhost/assets/'.$pic_name) }} 
		
		{{ HTML::image('assets/'.$pic_name) }} 
			
	@endif
	
	<br>
	
	<br>
		
</body>
</html>