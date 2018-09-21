<?php
//Get users input
$name = $_POST['name'];						 
$email = $_POST['email'];						 
$message = $_POST['message'];
//error messages
$missingName = '<p><strong>Please Enter your Name!</strong></p>';
$missingEmail = '<p><strong>Please Enter your Email Address</strong></p>'; 
$invalidEmail = '<p><strong>Please Enter a Valid Email</strong></p>';
$missingMessage ='<p><strong>Please enter a message</strong></p>';

if(isset($_POST['Submit'])){
	if(!$name){
        $errors .= $missingName;		 
	}else{
		$name = filter_var($name,FILTER_SANITIZE_STRING);
	}
	if(!$email){
	    $errors .= $missingEmail;
	}else{
	    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				 $errors .= $invalidEmail;
				}
		 }
	if(!$message){
	    $errors .= $missingMessage;
	}else{
    $message = filter_var($message,FILTER_SANITIZE_STRING);
			}
    if($errors){
	  $resultMessage = '<div class="alert alert-danger">' . $errors . '</div>'; 
			}else{
				$to = 'Electronicsmf@aol.com';
				$subject = 'Contact';
				$message = '<p>Name: {$name}</p>
				<p>Email: {$email}</p>
				<p>Message:</p>
				<p><strong>$message</strong></p>';
				$headers = 'Content-type: text/html';
				if(mail($to,$subject,$message,$headers)){
					$resultMessage = '<div class="alert alert-success">Thanks for your Message. We will get back to you as soon as possible!</div>';
				}else{
					$resultMessage = '<div class="alert alert-warning">Unable to Email.Please try again later!</div>';
				}
			}
	echo $resultMessage;
}						 
						 
?>	
<section id="contact" style="background:#161616">
	    <div class="container">
	        <div class="row">
	               <div class="col-lg-12 text-center">
						<h2 style="font:400 1.5em;color:white">I WOULD LIKE TO HEAR FROM YOU</h2>
						<hr class="star-primary">
	               </div>
	        </div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">		
					<form action="index.php?PageName=contact" method="post">
						<div class="row control-group">
							<div class="form-group col-xs-12 floating-label-form-group-controls">
								<label for="name">Name</label>
									<input type="text" class="form-control" placeholder="name" id="name" value=
										"<?php echo $_POST['name'];?>"/>
									<p class="help-block text-danger"></p>
							</div>
							<div class="form-group col-xs-12 floating-label-form-group-controls">
								<label for="email">Email Address</label>
									<input type="text" class="form-control" placeholder="Email Address" id="email" value="<?php echo $_POST['email'];?>">
										<p class="help-block text-danger"></p>
							</div>
							<div class="form-group col-xs-12 floating-label-form-group-controls">
								<label for="message">Message</label>
								<textarea rows="5" class="form-control" placeholder="Message" id="message"><?php echo $_POST['message'];?>
								</textarea>
								<p class="help-block text-danger"></p>
							</div>
							<br>
							<div id="success"></div>
								<div class="row">
									<div class="form-group col-xs-12">
										<input type="Submit" name="Submit" class="btn btn-success btn-lg" value="Send Message"/>
									</div>
								</div>
						</div>
					</form>
				</div><!--col-lg-12-->
	    </div><!--row-->
	</div><!--container-->
</section>