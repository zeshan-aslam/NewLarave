<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="login" method="POST">
	@csrf
	<label>email</label>
	<input type="text" name="email"><br>
	<label>password</label>
	<input type="text" name="password"><br>
	<button type="submit">submit</button>
</form>
</body>
</html>