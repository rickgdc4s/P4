<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','Project 4')</title>
	<meta charset='utf-8'>

	@yield('head')

	
</head>
<body>

<!-- CSCIE-15 Dynamic Web Applications. Fall, 2014 Project P4 - Picture Database -->

	<h1>Picture database<br></h1>
		
	
	<p>The Picture Database consists of a two tables, a Picture Table containing unique names of the pictures <br>
	entered via this web application, and an Owners Table, which contains the names of the owners of each picture, <br>
	which are also entered via this web application.</p>
	<p>Each uniquely named picture is stored in the web server storage directory, and identified by its name in the <br>
	picture table of the database. Only one copy of any unique picture may exist in the database (a picture belonging <br>
	to one owner may not also belong to another owner). </p>
	<p>There are six operations that can be performed with this database. A user may enter his/hers Owner Name (which <br>
	must be the initial step to use the database). Once the user has created an Owner Name in the Owner table of the <br>
	database, the user can Add a Picture, View an existing Picture in the database, Update a Picture's properties, <br>
	Delete a Picture from the database, and Delete his/hers Owner Name.</p>
				 
<!-- Provide a link to the Lorem Ipsum Generator page, to be routed through the lorem_ipsum route -->			  			 
			<a href='/add_owner'>Add a Picture Owner</a>
			<br>					 
			<br>
			
<!-- Provide a link to the Lorem Ipsum Generator page, to be routed through the lorem_ipsum route -->			  			 
			<a href='/add_pic'>Add a Picture</a>
			<br>
			<br>			
			 
<!-- Provide a link to the Generate Random Users page, to be routed through the random user route -->			  
			<a href='/read_pic'>View a Picture</a>	
			<br>	
			<br>			
			
<!-- Provide a link to the Generate Random Users page, to be routed through the random user route -->			  
			<a href='/retrieve_pic'>Download a Picture</a>	
			<br>	
			<br>						
			
			<a href='/update_pic'>Update a Picture</a>	
			<br>	
			<br>			
			
			<a href='/delete_pic'>Delete a Picture</a>	
			<br>
			<br>			
			
			<a href='/delete_owner'>Delete an Owner</a>	
			<br>
			<br>						
	 	
</body>
</html>