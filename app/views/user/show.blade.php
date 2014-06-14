<!DOCTYPE html>
<html>
<head>
	<title>Show user</title>
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

<div class="jumbotron text-center">
    <p>
        <strong> Id : </strong> {{ $user->id }}<br> 
<strong> Username : </strong> {{ $user->username }}<br> 
<strong> Password : </strong> {{ $user->password }}<br> 

    </p>
</div>
</div>
</body>
</html>