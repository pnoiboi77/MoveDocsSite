


<!DOCTYPE html>

<html>
	<head>
		<link rel="shortcut icon" href="images/favicon.ico" />
		<!-- Website Title & Description for Search Engine purposes -->
		<title>MoveDocs - Secure, Secure Online-based Personal, Professional, Medical and Legal Records</title>
		<meta name="description" content="With MoveDocs, a revolutionary cloud based legal and medical record depot, legal and medical professionals can now access their records in one place online."/>
		<meta name="keywords" content="secure patient records, online health records, electronic medical records, personal health records, online document repository, online legal records"/>
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
		
	</head>
	<body>
	<div class="section1">
		<div class="container" id="main">
		
			<div class="navbar navbar-fixed-top" id="naviBack">
				<div class="container">
					
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
					<a class="navbar-brand" href="index.html"><img src="images/logo-sm.png" alt="Your Logo"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<li  >
								<a href="index.html">Home</a>
							</li>
							
							<li >
								<a href="personal.html" >Personal</a>
							</li>


							<li >
								<a href="office.html" >Office</a>
							</li>

							<li >
								<a href="legal.html">Law Firm</a>
							</li>	

								<li >
								<a href="pricing.html">Pricing</a>
							</li >


							<li >
								<a href="security.html" >Security</a>
							</li>

							<li class="active">
								<a href="contact.php" >CONTACT US</a>
							</li>

							


							
						</ul>
						<ul class="pull-right navbar-form">
							<li>
								<a href="https://cmb.movedocs.com" target="_blank" class="btn btn-primary">Log In</a>
							</li>
							<!--<li>
								<a href="https://cmb.movedocs.com/create.aspx" target="_blank" class="btn btn-default">Sign Up</a>
							</li>-->
						</ul>
					</div><!-- end nav-collapse -->
				</div><!-- end container -->
			</div><!-- end navbar -->
			
			

		<div class="section2">			<!--SECURITY SECTION-->
			<div class="container" id="sec2con">
	





		<div class="row" id="featuresHeading">
			<div class="col-12">
				<h1 style="font-size:"><b>Contact us</b></h1>
				<h2 ><b>MoveDocs is there for you.</b> </h2>
								
					<h4  style=" color: #428BCA; text-align:center; margin-top: 12px;"><span class="glyphicon glyphicon-phone"></span><b>    Phone: 800-682-9081     <br> Email: customersupport@movedocs.com <span class="glyphicon glyphicon-envelope"></span> </b></h4>
					
					
					

				

			</div>
		</div>
<?php


	$to = "kyle@movedocs.com";
	$sub = "MoveDocs Customer Service";

	
	// define variables and set to empty values
	$Err =  "field is required!";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["subject"])) {
   			$Err1 = "  *Subject ". $Err;
 		} else {
 			$subject = $_POST["subject"];
 		}

 		if (empty($_POST["email"])) {
   			$Err2 = "  *Email ". $Err;
 		} else {
 			$email = $_POST["email"];
 		}

 		if (empty($_POST["message"])) {
   			$Err3 = "  *Message ". $Err;
 		} else {

			$message = $_POST["message"];
 		}

 		
 		

 		
 		
 		if (!empty($_POST["message"]) && !empty($_POST["email"]) && !empty($_POST["subject"])) {

	 		


			 function clean_string($string) {
 
      		$bad = array("content-type","bcc:","to:","cc:","href");
 
      		return str_replace($bad,"",$string);
 
   			}

			$body = "Form details below. \n\n";

			$body .= "Email: \n".clean_string($email)."\n\n";
			$body .= "Subject: \n".clean_string($subject)."\n\n";
			$body .= "Message: \n".clean_string($message)."\n\n";

			$header = 'From ' .$email. "\r\n" .
			'Reply-To:'.$email." \r\n" .
			'X-Mailer: PHP/' . phpversion();


	 		//echo $to."<br />".$subject."<br />".$message."<br />".$email
	 		@mail($to, $sub, $body, $header);
			$feedback = "Your message has been sent, We will get back to you within the hour!";
			
		} else {
			$feedback = "There was an error! Please check the following fields";
		}
	 
	} 

	



?>

		<div class="contact plans" style="margin-top: -20px">

			<form role="form " method="post" style="margin: 40px 0 30px" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

				<h2 style="text-align: center;"><b>Quick Contact</b></h2>

				<!--<span style="font-size: 20px; margin: 20px 10px;" class="error" id="feedback"><?php echo $feedback; ?></span>-->
				<div class="alert alert-success alert-block fade in" id="success"><?php echo $feedback; ?></div>

				<div class="alert alert-success alert-block fade in" id="success"><?php echo $feedback; ?>
					<button></button>
				</div>

				<div class="form-group plans " >
			    	<label for="email">Email address:</label><span class="error plans"  style="color: red;"> <?php echo $Err2;?></span>
			   		<input type="email" class="form-control" id="email" name='email'>
				</div>
				

				<div class="form-group plans" >
			    	<label for="subject">Subject: </label><span class="error plans" style="color: red;"><?php echo $Err1;?></span>
			    	<input type="text" class="form-control" id="subject" name='subject'>
				</div>
				

			    <div class="form-group plans " style="margin-bottom: 10px;">
			    <label for="message">Message:</label><span class="error plans" style="color: red;"><?php echo $Err3;?></span>
			    <textarea class="form-control" rows="3" id="message" name='message'></textarea>
				</div>
				

			    <button type="submit" name="submit"  class="btn btn-block plans" style="text-align: center; background:#333; color: white;" >Submit</button>
			    
		    </form>



		</div>
			

	</div>
</div>

		



	</div>

	
	<footer>
			<div class="container" style="text-align: left;">
				<div class="row">
					<div class="col-sm-2">
					<h6>Copyright &copy; 2014 Movedocs.com</h6>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-4" style="text-align: center;">
						<h6>About Us</h6>
						<p>A file storage system that allows you to store and move files securely with sharing capabilities. Move it dont lose it!</p>
					</div><!-- end col-sm-4 -->
					
					<div class="col-sm-2">
						<h6>Navigation</h6>
						<ul class="unstyled">
							<li><a href="index.html">Home</a></li>
							<li><a href="personal.html">Personal</a></li>
							<li><a href="office.html">Office</a></li>
							<li><a href="legal.html">Law Firm</a></li>
							<li><a href="pricing.html">Pricing</a></li>
							<li><a href="security.html">Security</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							
						</ul>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-4">
						<h6>Contact Info</h6>
						<ul class="unstyled">
							<li><a href="#" onclick="return false">Phone: 1(800)682-9081</a></li>
							<li><a href="#" onclick="return false">Email:  customerservice@movedocs.com</a></li>
							
						</ul>
					</div><!-- end col-sm-2 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</footer>

	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	
	</body>
</html>

