<!DOCTYPE html>
<html>
<head>

	<title>(Picture Added)</title>
	<meta charset='utf-8'>
	
</head>
<body>
	
<!-- Provide a link to return to the home page -->		
	<li><a href='/'>Return to Home Page</a></li>
	
	<br>
	
	@if ( ($found_Pic) )
	<h1>Picture Already Exists</h1>	
	<li><a href='/add_pic'>Try Again - Add a New Picture to the Database</a></li>
	
	<br>
	@elseif( (!$found_Owner) )
	<h1>Owner does not Exist</h1>	
	<li><a href='/add_owner'>Add a New Owner to the Database</a></li>
	
	<br>	
    @else 	

	<br>
<!--	<h1>Picture Link</h1>  -->
	
	<h2>Picture Added = {{{ $pic_name }}} </h2>	
	
	{{ HTML::link('http://localhost/assets/'.$pic_name) }}
	
	{{ HTML::image('assets/'.$pic_name) }}
	
	<br>
	
	<br>
	@endif
		
</body>
</html>