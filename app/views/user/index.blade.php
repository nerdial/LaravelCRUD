<!DOCTYPE html>
<html>
<head>
    <title>user List</title>
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

<!-- will be used to show any messages -->
@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif


<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td> Id </td> 
<td> Username </td> 

            <td>Action</td>
		</tr>
	</thead>
	<tbody>
	@foreach($user as $key => $value)
		<tr>
			<td> {{ $value->id }} </td> 
<td> {{ $value->username }} </td> 



			<!-- we will also add show, edit, and delete buttons -->
			<td>

				{{ Form::open(array('url' => 'user/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this user', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}


				<a class="btn btn-small btn-success" href="{{ URL::to('user/' . $value->id) }}">Show this user</a>
				<a class="btn btn-small btn-info" href="{{ URL::to('user/' . $value->id . '/edit') }}">Edit this user</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>