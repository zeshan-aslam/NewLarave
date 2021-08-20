<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="register" method="POST">
	@csrf
	<label>name</label>
	<input type="text" name="name"><br>
	<label>email</label>
	<input type="text" name="email"><br>
	<label>password</label>
	<input type="text" name="password"><br>
	<button type="submit">submit</button>
</form>
</body>
</html>