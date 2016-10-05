<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
<form action="/user/edit-delete" method="POST">
    {{ csrf_field() }}
	<table class="table table-striped">
	   <tr>
	   	<th>Delete</th>
	   	<th>First Name</th>
	   	<th>Last Name</th>
	   	<th>Username</th>
	   	<th>Email</th>
	   </tr>
	   @foreach(range(1, 4) as $i)
		   <tr>
		   	<td><input type="checkbox" name="user[{{$i}}]"></td>
		   	<td>asdad</td>
		   	<td>zxczx</td>
		   	<td>zxczzxc</td>
		   	<td>zxczzxc</td>
		   	<td><a href="/user/{{$i}}/edit">edit</a></td>
		   </tr>
	   @endforeach
	</table>

	<input type="submit" name="submit">
</form>
			</div>
		</div>
	</div>
</body>
</html>