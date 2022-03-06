<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration System</title>
	<style type="text/css">
		div{
			width:700px;margin:0 auto; line-height: 30px;margin-top: 100px;background: #ddd; padding: 30px;text-align: center;font-weight: bold;color: #000;
		}
		.btn{
			cursor: pointer;

		}
	</style>
</head>
<body>
	<div>
		<h4>Registration Form</h4>
		<form method="post" action="register">
			name:<input type="text" name="name" placeholder="enter username">
			<br>
			email:<input type="text" name="email" placeholder="enter email">
			<br>
			password:<input type="password" name="password" placeholder="password">
			<br>
			<input type="submit" class="btn" value="Signup">
		</form>

	</div>
</body>
</ht