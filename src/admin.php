
<!DOCTYPE html>
<html>
	<head>
	<?php 
	$path = $_SERVER['DOCUMENT_ROOT'].'/project1/src/html/';
	$path .= 'htmlheader.php';
		 include($path);
		?>

	</head>
	<body>
		<div class="container" style="height:1800px">
			<?php 
			$path1 = $_SERVER['DOCUMENT_ROOT'].'/project1/src/html/';
      $path1 .= 'navigation.php';
         include($path1);
			?>
			<!-- Main Content !! -->
			<!-- Admin Menu !! -->
			<br><br>
			<h2 class="text-center">	Welcome to the admin login form !</h2>
			<br><br>
			 <form id="adminForm" method="post" action="/project1/src/admin/loginValidation.php">
				<div class="form-group">
				  <label for="username">Username:</label>
				  <input type="text" class="form-control" placeholder="Enter username" name="username">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			  </form>
			<!-- Admin Menu !! -->
			<!-- Main Content !! -->
						<?php 
						$path2 = $_SERVER['DOCUMENT_ROOT'].'/project1/src/html/';
						$path2 .= 'footer.php';
							 include($path2);
			?>
			<script> 
			  //FORM VALIDATION

    $("#adminForm").validate({
        rules: {
					username:{
                required: true,
						},
					password:{
                required: true,
						}	

        }

    });
			</script>
		</div>
	</body>
</html>
