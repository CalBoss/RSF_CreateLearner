<!DOCTYPE html>
<html>
    <head>
        <title>CreateLearnerResponse</title>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
		<div id="wrapper">
			<pre>
			<?php
			$api_key = $user_id = $password = $first_name = $last_name = $groud_id = $response_type = $response_code = $language = $extended_error_text = $wrap_ext_error = $error_type = $footer = Null;                
			if (!empty($_POST)){
				if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['language']) && !empty($_POST['group_id']) && !empty($_POST['wsdl']) && !empty($_POST['api_key'])){
					//required params for this type of request
					$footer = $_POST['footer'];
					$wsdl = $_POST['wsdl'];
					$api_key = $_POST['api_key'];
					$user_id = $_POST['username'];
					$password = $_POST['password'];
					$group_id = $_POST['group_id'];
					$language = $_POST['language'];

					//none required params for this type of request	
					if (!empty($_POST['fn'])){
						$first_name = $_POST['fn'];
					}else{
						$first_name = Null;
					}
					
					if (!empty($_POST['ln'])){
						$last_name = $_POST['ln'];
					}else{
						$last_name = Null;
					}

					if (!empty($_POST['email'])){
						$email = $_POST['email'];
					}else{
						$email = Null;
					}

					if (!empty($_POST['notes'])){
						$notes = $_POST['notes'];
					}else{
						$notes = Null;
					}
					
					$soaperror = False;
					require 'CreateLearner_Class.php';
					try {
						$client = new SoapClient($wsdl);//Initializing Soap Call
						} catch(SoapFault $exception) {
								$soaperror = True;
								$soapmessage = wordwrap($exception->getMessage(), 75, "\n", true);
						}
					$progress = new CreateLearner($api_key, $user_id, $password, $first_name, $last_name, $group_id, $language, $email, $notes, False);
					$params = array($progress);
					if ($soaperror){
						echo "<h2><font color=\"blue\">Please Make sure you are typing the correct WSDL URL</font></h2><hr>";
						echo "<h3>Soap Error Message:</h3>";
						echo "<div id=\"url\"><font color=\"red\">$soapmessage</font></div>";
						}
					else{
						print_r ($params);} //Only used for testing
						/*
						$response = $client->__soapCall("CreateLearner", $params);

						//passing object values to a variables for displaying on page;
						$response_type = $response->response_type;
						$response_code = $response->response_code;
						if ($response_type == "success"){
							//Grabbing variables from response object
							echo "something didn't work right";
							
							$language = $response->grade->language;
							$curriculum = $response->grade->curriculum;
							$percentage_completed = $response->grade->percentage_completed;
							$time_spent_hours = $response->grade->time_spent_hours;
							$language_level = $response->grade->language_level;
							$score = $response->grade->score;
						}else{

						}*/
						//The following part of this page is just for display:
						echo "<div id=\"header\"><h1>Request Response from: </h1></div><!-- #header -->";
						echo "<ul style=\"list-style-type:none\"><li><font color=\"blue\">$wsdl</font></li></ul>";
						echo "<h1>Using CreateLeaner with these parameters:</h1><ul style=\"list-style-type:square\"><li>\"<font color=\"blue\">$api_key</font>\" as <strong>api_key</strong></li><li>\"<font color=\"blue\">$user_id</font>\" as <strong>user_id</strong></li><li>\"<font color=\"blue\">$language</font>\" for <strong>language</strong> code</li><li>And using \"<font color=\"blue\">$groud_id</font>\" for <strong>group_id</strong></li></ul>";
						echo "<hr>";
						/*
						if ($response_type == "error"){
							$extended_error_text = $response->error->extended_error_text;
							$wrap_ext_error = wordwrap($extended_error_text, 66, "\n", true);
							$error_type = $response->error->error_type;
							echo "<h2>An <font color=\"red\">error</font> has occurred:</h2><div>";
							echo "<ul style=\"list-style-type:square\"><li>Verbose description of this error: </br>\"<font color=\"red\">$wrap_ext_error</font>\"</li><li>Error Type = \"<font color=\"red\">$error_type</font>\"</li></ul></div>";
							}
						else {
							echo "<h2>No error response will give out response values</h2>";
						echo "<hr><h2>The \"response_type\" was: <font color=\"blue\"><strong>$response_type</strong></font></h2><h2>The \"response_code\" was: <font color=\"blue\"><strong>$response_code</strong></font></h2>";
						//echo "<ul style=\"list-style-type:none\"><li><font color=\"blue\"><strong>$response_type</strong></font></li></ul>";
						}*/
				}else{
					 echo "</br></br><h1><font color=\"red\">Missing Parameter values!</font></h1><h3>You must enter all required Parameters to make this type of SOAP request.</h3>";}
			}else{
				echo "</br></br><h1><font color=\"red\">ACCESS DENIED</font></h1><h3>This page is not supposed to be accessed directly</h3>";}
			?>
			</pre>
		<!--[if IE]>
		<div id="IE11footer">			
		<![endif]-->
		<div id="footer">
			<footer>
		<?php
				print ("<p><font color=\"green\">$footer | Created by Hugo Mejia | Property of Rosetta Stone&reg;.</font></p>");
			?>
			</footer>
		</div><!-- #footer -->
		</div><!-- #IE11footer-->
		</div><!-- #wrapper -->
	</body>
</html>
