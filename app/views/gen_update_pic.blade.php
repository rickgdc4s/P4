<!DOCTYPE html>
<html>
<head>

	<title>(Update Picture Date)</title>
	<meta charset='utf-8'>
	
</head>
<body>
	
<!-- Provide a link to return to the home page  -->		
	<li><a href='/'>Return to Home Page</a></li>
	
	<br>
	
	@if ( (!$found_Pic) )
	<h1>Picture Does not exist in the Database</h1>	
	<li><a href='/update_pic'>Try Again - Update an Existing Picture's Date in the Database</a></li>	
    @else
	<h1>Picture Updated</h1>
		<h2>Picture Updated = {{{ $pic_name }}} </h2>	 
		<h2>Picture New Date = {{{ $updated_pic_date }}} </h2>	 

	@endif
		
	
	<br>
	
	<br>
		
</body>
</html>