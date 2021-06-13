<!DOCTYPE html>
<html>
<head>
	<title>document</title>
</head>
<body>
	<form action="/post/{{$post->id}}" method="post">
		@csrf
		@method('patch')
		Name:<input type="text" name="name" value="{{$post->name}}"><br>
		Description:<input type="text" name="description" value="{{$post->description}}"><br>
		<input type="submit" name="" value="submit">
	</form>
</body>
</html>