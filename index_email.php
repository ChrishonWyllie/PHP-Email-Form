<?php include("contactform.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		
		<title>PHP Email form</title>
		
		<meta name ="viewport" content ="width=device-width, initial-scale=1.0"> 
		
		<!--Bootstrap CSS CDN-->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!---jQuery CDN-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

	</head>

	<body>
			
		<!-- container for Contact-->
		<div class="container-fluid">
			<div class ="Contact" id="ContactLink">
				<h2 class="text-center large-gray-font">Contact</h2>
				
				<br/>
				<br/>
				
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<form class="form-horizontal" role="form" method="post" action="index.php">
								<div class="form-group">
									<label for="name" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
										<?php echo "<p class='text-danger'>$errName</p>";?>
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
										<?php echo "<p class='text-danger'>$errEmail</p>";?>
									</div>
								</div>
								<div class="form-group">
									<label for="message" class="col-sm-2 control-label">Message</label>
									<div class="col-sm-10">
										<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
										<?php echo "<p class='text-danger'>$errMessage</p>";?>
									</div>
								</div>
								<div class="form-group">
									<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
										<?php echo "<p class='text-danger'>$errHuman</p>";?>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<?php echo $result; ?>	
									</div>
								</div>
							</form> 
						</div> <!-- ending div for contact form-->
					</div><!-- ending div for container-->
				</div><!-- ending div for row -->
			</div><!-- ending div for contact -->		
		</div><!-- ending div for contact container-->
		
		

		<!--Bootstrap Js CDN-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		
		
	</body>
</html>
