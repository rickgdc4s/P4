<!DOCTYPE html>
<html>
<head>

	<title>(Owner to Delete)</title>
	<meta charset='utf-8'>
	
</head>
<body>
	
<!-- Provide a link to return to the home page after generating the Lorem Ipsum -->		
	<li><a href='/'>Return to Home Page</a></li>
	
	<br>
	
	@if ( (!$found_Owner) )
	<h1>Owner Does not exist in the Database</h1>	
	<li><a href='/delete_owner'>Try Again - Delete an Existing Owner from the Database</a></li>	
    @else
	<h1>Owner Title</h1>
		<h2>Owner Deleted = {{{ $owner_name }}} </h2>	 
	@endif
		
	
	<br>
	
	<br>
		
</body>
</html>