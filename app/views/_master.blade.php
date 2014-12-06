<!DOCTYPE html>
<html>
<head>

	<title>@yield('title','Project 4')</title>
	<meta charset='utf-8'>

	@yield('head')

	
</head>
<body>

<!-- CSCIE-15 Dynamic Web Applications. Fall, 2014 Project P4 - Test Pictures -->

	<h1>Test Pictures<br></h1>
	
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br>
	the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley <br>
	of type and scrambled it to make a type specimen book. It has survived not only five centuries, <br>
	but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised <br>
	in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently <br>
	with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	
		     <p>Generate some Lorem Ipsum dummy text, using the badcow-loremipsum package: </p>	
			 
<!-- Provide a link to the Lorem Ipsum Generator page, to be routed through the lorem_ipsum route -->			  			 
			<a href='/lorem_ipsum'>Execute Lorem Ipsum Generator</a>
			<br>		
			
		     <p>Generate some dummy random users, using the fzaninotto-faker package, <br>
			  a Lorem Ipsum-like package for generating dummy text. Here, we are using <br>
			  the fzaninotto-faker package to generate dummy names and birthdays,<br>
              and Lorem Ipsum text for user profiles:</p>						
			 
<!-- Provide a link to the Generate Random Users page, to be routed through the random user route -->			  
			<a href='/random_user'>Generate Random Users</a>	

<!-- Create the form to obtain the number of paragraphs, and to generate the Lorem Ipsum 
      on the lorem_ipsum blade view page  -->

		<hl><b>Lorem Ipsum Generator</b><br><br></hl> 
		
		
		{{ Form::open(array('url' => '/test_pics', 'method' => 'POST', 'files' => true)) }}

<!--		{{ Form::label('title','Enter the URL of Picture ') }} -->
	
<!--		{{ Form::text('title'); }} -->

        {{ Form::label('image', 'Image') }}
  		
		{{ Form::file('image') }}
		
		{{ Form::submit('Save') }}

<!--	    {{ Form::submit('save', array('name' => 'title')) }}  --> 

		{{ Form::close() }}				
		
		
<!-- {{ Form::open(array('url' => '/', 'files' => true )) }}

{{ Form::text('title', '', array(
    'placeholder' => 'Please insert your title here')) }}

{{ Form::file('image') }}

{{ Form::submit('save', array('name' => 'send')) }}

{{ Form::close() }}		
		
<form action="{{ url('handle-form') }}"
      method="POST"
      enctype="multipart/form-data">

    <input type="file" name="book" />
    <input type="submit">
</form>

{{ Form::open(array('url' => 'our/target/route')) }}

{{ Form::close() }}


<form method="POST"
      action="http://demo.dev/our/target/route"
      accept-charset="UTF-8"
      enctype="multipart/form-data">
    <input name="_token" type="hidden" value="83KCsmJF1Z2LMZfhb17ihvt9ks5NEcAwFoRFTq6u">
</form>


{{ Form::open(array(
    'url'   => 'my/route',
    'files' => true
)) }}
    {{ Form::label('avatar', 'Avatar') }}
    {{ Form::file('avatar') }}
{{ Form::close() }}


<form method="POST"
      action="http://demo.dev/my/route"
      accept-charset="UTF-8"
      enctype="multipart/form-data">
    <input name="_token" type="hidden" value="83KCsmJF1Z2LMZfhb17ihvt9ks5NEcAwFoRFTq6u">
    <label for="avatar">Avatar</label>
    <input name="avatar" type="file" id="avatar">
</form>  -->

	 	
</body>
</html>