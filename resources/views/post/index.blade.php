<!DOCTYPE html>
<html>
<head>
	<title>document</title>
</head>
<body>
	<table> 
		<tr>
			<th>sno.</th>
			<th>Name</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
		@foreach($data as $value)
			<tr>
				<td>{{$value->id}}</td>
				<td>{{$value->name}}</td>
				<td>{{$value->description}}</td>
				<td>
					<a href="/post/{{$value->id}}/edit">Edit</a>
					<form action="/post/{{$value->id}}" method="post">
						@csrf
						@method('delete')
						<button type="submit">Delete</button>
					</form>
				</td>
			</tr>
		@endforeach
	</table>
</body>
</html>