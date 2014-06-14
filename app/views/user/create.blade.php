<!DOCTYPE html>
<html>
<head>
    <title>New user </title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('user') }}">View All user</a></li>
            <li><a href="{{ URL::to('user/create') }}">Create a user</a>
        </ul>
    </nav>

<h1>Create a user</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'user')) }}

	 <div class="form-group">
 	 	 {{ Form::label('username', 'Username') }}
 	 	 {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
 	 </div>
 	 <div class="form-group">
 	 	 {{ Form::label('password', 'Password') }}
 	 	 {{ Form::password('password', array('class' => 'form-control')) }}
 	 </div>
 	 <div class="form-group">
 	 	 {{ Form::label('email', 'Email') }}
 	 	 {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
 	 </div>
 
	{{ Form::submit('Create the user', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>