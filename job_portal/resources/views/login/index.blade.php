<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="post">
	@csrf
	<!--{{csrf_field()}}-->
		<fieldset>
			<legend>Login</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		</fieldset>
	</form>
	<div style="color: red">{{session('msg')}} </div>
</body>
</html>