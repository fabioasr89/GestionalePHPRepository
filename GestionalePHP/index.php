<html>
<?php 
    $param=0;
    include_once 'web/layout/head.php';
?>
<body>
<?php include_once 'web/layout/header.php';?>
<div class="container content">
		<form action="src/controller/LoginController.php" method="post">
			<div class="form-group">
				<label for="username">Username</label> <input
					type="text" class="form-control" id="username"
					aria-describedby="username" name="username" required>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label> <input
					type="password" class="form-control" id="password" name="password" required>
			</div>
			<button type="submit" class="btn btn-primary" style="float:right;">Login</button>
		</form>
	</div>
</body>

</html>
