<!DOCTYPE html>
<html>
    <head>
        <meta chaset="UTF-8">
        <title>Building CreateLearner</title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
	<div id="wrapper">
		<pre>
        <?php
		$footer = "";
			if (!empty($_POST)){
				if(!empty($_POST['url']) && !empty($_POST['api_key'])){
					$wsdl = $_POST['url'];
					$api_key = $_POST['api_key'];
					$footer = $_POST['footer'];
					echo "<div id=\"header\"><h2>Creating <font color =\"blue\">CreateLearner</font> Soap Request to:</h2></div><!-- #header --><hr><div id=\"subheader\">";
					echo "<div id=\"url\"><a>URL: <font color=\"blue\"><strong>$wsdl</strong></font></a>";
					echo "</div></br><div id=\"url\"><a><bold>Using this <font color=\"blue\"><strong>api_key</strong></font> value: <strong>$api_key</strong></bold></a></div></div><!-- #subheader --><hr>";
					echo "<div  id=\"content\"></br><p><strong>Parameters marked with <font color=\"red\">** </font>are always required.</strong></p>";
					echo "<form id=\"post-form\" method=\"POST\" action=\"CreateLearner.php\">";
					// user_id
					echo "<div id=\"url\"><label for=\"user_id\"><font color=\"blue\"><strong>user_id: </strong></font></label><input type=\"text\" id=\"username\" name=\"username\" size=\"27\"/><a><font color=\"red\"> ** </font></a></div></br>";
					// password
					echo "<div id=\"url\"><label for=\"password\"><font color=\"blue\"><strong>password: </strong></font></label><input type=\"text\" id=\"password\" name=\"password\"size=\"27\" /><a><font color=\"red\"> ** </font></a></div></br>";
					// first_name
					echo "<div id=\"url\"><label for=\"first_name\"><font color=\"blue\"><strong>first_name: </strong></font></label><input type=\"text\" id=\"fn\" name=\"fn\"size=\"27\" /><a></a></div></br>";
					// middle_name
					echo "<div id=\"url\"><label for=\"middle_name\"><font color=\"blue\"><strong>middle_name: </strong></font></label><input type=\"text\" id=\"mn\" name=\"mn\"size=\"27\" /><a></a></div></br>";
					// last_name
					echo "<div id=\"url\"><label for=\"last_name\"><font color=\"blue\"><strong>last_name: </strong></font></label><input type=\"text\" id=\"ln\" name=\"ln\"size=\"27\" /><a></a></div></br>";
					// email
					echo "<div id=\"url\"><label for=\"email\"><font color=\"blue\"><strong>email: </strong></font></label><input type=\"text\" id=\"email\" name=\"email\"size=\"27\" /><a> case & email format sensitive</a></div></br>";
					// birth_date
					echo "<div id=\"url\"><label for=\"birth_date\"><font color=\"blue\"><strong>birth_date: </strong></font></label><input type=\"text\" id=\"birth_date\" name=\"birth_date\"size=\"27\" /><a></a></div></br>";
					// gender
					echo "<div id=\"url\"><label for=\"gender\"><font color=\"blue\"><strong>gender: </strong></font></label><input type=\"text\" id=\"gender\" name=\"gender\"size=\"27\" /><a> case senstiive</a></div></br>";
					// time_zone
					echo "<div id=\"url\"><label for=\"time_zone\"><font color=\"blue\"><strong>time_zone: </strong></font></label><input type=\"text\" id=\"time_zone\" name=\"time_zone\"size=\"27\" /><a> case senstiive</a></div></br>";
					// localization
					echo "<div id=\"url\"><label for=\"localization\"><font color=\"blue\"><strong>localization: </strong></font></label><input type=\"text\" id=\"localization\" name=\"localization\"size=\"27\" /><a> case senstiive</a></div></br>";
					// display_name
					echo "<div id=\"url\"><label for=\"display_name\"><font color=\"blue\"><strong>display_name: </strong></font></label><input type=\"text\" id=\"display_name\" name=\"display_name\"size=\"27\" /><a> can only use US alphabetical characters</a></div></br>";
					// country
					echo "<div id=\"url\"><label for=\"country\"><font color=\"blue\"><strong>country: </strong></font></label><input type=\"text\" id=\"country\" name=\"country\"size=\"27\" /><a> case senstiive</a></div></br>";
					// group_id
					echo "<div id=\"url\"><label for=\"group_id\"><font color=\"blue\"><strong>group_id: </strong></font></label><input type=\"text\" id=\"group_id\" name=\"group_id\" size=\"27\" /><a><font color=\"red\"> ** </font> case sensitive</a></div></br>";
					// language
					echo "<div id=\"url\"><label for=\"language\"><font color=\"blue\"><strong>language: </strong></font></label><input type=\"text\" id=\"language\" name=\"language\"size=\"20\" /><a><font color=\"red\"> ** </font> case sensitive</a></div></br>";
					// language_level
					echo "<div id=\"url\"><label for=\"language_level\"><font color=\"blue\"><strong>language_level: </strong></font></label><input type=\"text\" id=\"language_level\" name=\"language_level\"size=\"27\" /><a> 1 through 5</a></div></br>";
					// curriculum
					echo "<div id=\"url\"><label for=\"curriculum\"><font color=\"blue\"><strong>curriculum: </strong></font></label><input type=\"text\" id=\"curriculum\" name=\"curriculum\"size=\"27\" /><a> case senstiive</a></div></br>";
					// notes
					echo "<div id=\"url\"><label for=\"notes\"><font color=\"blue\"><strong>notes: </strong></font></label><input type=\"text\" id=\"notes\" name=\"notes\"size=\"40\" /></div></br>";
					
					// Following 3 Hidden values passed from page before so they can be place in hold for when this form is executed.
					echo "<div id=\"url\"><input type=\"hidden\" id=\"api_key\" name=\"api_key\" value=\"$api_key\" />";
					echo "<input type=\"hidden\" id=\"wsdl\" name=\"wsdl\" value=\"$wsdl\" />";
					echo "<input type=\"hidden\" id=\"footer\" name=\"footer\" value=\"$footer\" />";
					echo "<input type=\"submit\" name=\"submit\" value=\"Submit\" /></div></form></div><!-- #content -->";
					}else{
						echo "</br></br><h1><font color=\"red\">Missing Parameter values!</font></h1><h3>You must enter all required Parameters to make this type of request.</h3>";
					}
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
    <SCRIPT>
	$(document).ready(function() {

		var div = $('#header');
		var start = $(div).offset().top;

		$.event.add(window, "scroll", function() {
			var p = $(window).scrollTop();
			$(div).css('position',((p)>start) ? 'fixed' : 'static');
			$(div).css('top',((p)>start) ? '10px' : '');
		});

	});
	</SCRIPT>
</html>

