<?
define('INCLUDE_CHECK',true);	//connect.php and functions.php cannot be run if index.php hasn't been initiated.

require 'connect.php';	//script to connect to database server

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Steven Kinghorn</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

		<!--Jquery for sliding panels-->		
		<script src="js/slide.js" type="text/javascript"></script> 
		
	</head>

	<body>

	<div id="main">
		<div class="outer_container">
		
			<form action="" method="post">
				<div id="step_1_head">
					<div class="head">
						Step 1: Your Details
					</div>
				</div>
				<div id="form1">
					<div class="form">
						<label for="firstname"><p>First Name:</p></label>
						<input type="text" name="firstname" id="firstname" value="" size="23" />
						<label for="surname"><p>Surname:</p></label>
						<input type="surname" name="surname" id="surname" size="23" />
						<div id="next1">
							<div class="next_button">
								Next &gt
							</div>
						</div>
					</div>
				</div>
			
				<div id="step_2_head">
					<div class="head">
						Step 2: More Details
					</div>
				</div>		
				<div id="form2">
					<div class="form">
						<label for="telephone"><p>Telephone Number::</p></label>
						<input type="text" name="telephone" id="telephone" value="" size="23" />
						<div id="next2">
							<div class="next_button">
								Next &gt
							</div>
						</div>
					</div>
				</div>
				
				<div id="step_3_head">
					<div class="head">
						Step 3: Final Details
					</div>
				</div>	
				<div id="form3">
					<div class="form">
						<label for="telephone"><p>Telephone Number::</p></label>
						<input type="text" name="telephone" id="telephone" value="" size="23" />
						<input type="submit" name="submit" value="Submit" class="next_button" />
					</div>
				</div>

			</form>
		
		</div>
	</div>
	
<!-- INCLUDING THE BOOTSTRAP CDN -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	</body>
</html>



