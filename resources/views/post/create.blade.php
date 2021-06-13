<!DOCTYPE html>
<html>
<head>
	<title>document</title>
</head>
<body>
	<form action="/post" method="post">
		@csrf
		Name:<input type="text" name="name"><br>
		Description:<input type="text" name="description"><br>
		<input type="submit" name="" value="submit">
	</form>
</body>
</html>