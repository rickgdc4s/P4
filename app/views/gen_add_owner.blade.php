<!DOCTYPE html>
<html>
<head>

	<title>(Owner Added)</title>
	<meta charset='utf-8'>
	
</head>
<body>
	
<!-- Provide a link to return to the home page after generating the Lorem Ipsum -->		
	<li><a href='/'>Return to Home Page</a></li>
	
	<br>
	
	@if ( ($found_Owner) )
	<h1>Owner Already Exists</h1>	
	<li><a href='/add_owner'>Try Again - Add a New Owner</a></li>
	
	<br>
    @else	
	<h1>Owner Added</h1>
	
	<h2>Owner {{{ $query }}} Added </h2>
		
	<br>
	@endif
	
	<br>
	

		
</body>
</html>