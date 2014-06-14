<!DOCTYPE html>
<html>
<head>
    <title>Edit user</title>
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
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model('user', array('route' => array('user.update', $user->id), 'method' => 'PUT')) }}

	 <div class="form-group">
 	 	 {{ Form::label('username', 'Username') }}
 	 	 {{ Form::text('username', $user->username , array('class' => 'form-control')) }}
 	 </div>
 	 <div class="form-group">
 	 	 {{ Form::label('email', 'Email') }}
 	 	 {{ Form::email('email', $user->email , array('class' => 'form-control')) }}
 	 </div>
 

	{{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>