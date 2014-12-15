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

<!-- Create the form to obtain the number of paragraphs, and to generate the Lorem Ipsum 
      on the lorem_ipsum blade view page  -->

		<hl><b>Add a Picture</b><br><br></hl> 
		
		{{ Form::open(array('url' => '/add_pic', 'method' => 'POST', 'files' => true)) }} 
		
<!--		{{ Form::open(array('url' => '/add_pic', 'method' => 'POST')) }}  -->

<!--		{{ Form::label('Picture Title','Enter the Name of the Picture ') }} -->
	
<!--		{{ Form::text('title'); }} -->

        {{ Form::label('image', 'Image') }}
  		
		{{ Form::file('image') }}  
		
		<br><br>
		
		{{ Form::label('pic_owner','Enter the owner of the Picture ') }} 
	
		{{ Form::text('pic_owner'); }} 
		
		<br><br>		
		
		{{ Form::label('date','Enter the Date of the Picture YYYY-MM-DD ') }} 
	
		{{ Form::text('date'); }} 			

<!--		{{ Form::text('image') }} -->
		
		<br><br>		
		
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