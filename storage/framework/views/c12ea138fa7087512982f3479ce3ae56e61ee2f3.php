<!DOCTYPE html>
<html>
<head>
	<title>GET AND POST</title>
</head>
<body>
	<h3>User form: </h3>
	<br>

	<form method="post" action="routeUsers">
		<?php echo csrf_field(); ?>
		<?php echo method_field('DELETE'); ?>

		<input type="text" name="name"><br><br>
		<input type="submit" value="submit">
		
	</form>

</body>
</html><?php /**PATH C:\xampp\htdocs\jmRipon\resources\views/user.blade.php ENDPATH**/ ?>