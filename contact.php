<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
	if (isset($_POST['submit']))
	{
		$error = "";

		if (!empty($_POST['name']))
		{
			$name = $_POST['name'];
		}
		else
		{
			$error .= "<li>Your name</li>";
		}

		if (!empty($_POST['email']))
		{
			$email = $_POST['email'];

			if (!preg_match("/^[_a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email))
			{
				$error .= '<li>A <strong>valid</strong> email address ("' . $email . '" is not valid)</li>';
			}
		}
		else
		{
			$error .= "<li>An email address where we can contact you</li>";
		}

		if (!empty($_POST['message']))
		{
			$message = $_POST['message'];
		}
		else
		{
			$error .= "<li>A message describing the kind of work you are interested in</li>";
		}

		if (($_POST['code']) == $_SESSION['code'])
		{
			$code = $_POST['code'];
		}
		else
		{
			$error .= "<li>A valid code so we know you are a person</li>";
		}

		if (empty($error))
		{
			$from = 'From: ' . $name . ' <' . $email . '>';
			$to = 'info@keeptruedesign.com';
			$subject = 'New message from website contact form';
			$success = "<p><strong>Thank you! Your message has been sent!</strong></p>";

			mail($to, $subject, $message, $from);
		}
	}

?>



<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta name="description" content="Keep True Design performs web and user experience design for local businesses and communities in Northern and Central New York.">
<meta name="keywords" content="design,web design,ux,ux design,user experience design,upstate new york,central new york,northern new york,baldwinsville new york, watertown new york, sackets harbor new york">
<title>Keep True Design - Contact</title>
<!--[if lt IE 9]>
  <script src="./assets/javascripts/html5.js"></script>
<![endif]-->
<!--<link rel="stylesheet" href="./css/style_demo.css" />-->
<link rel="stylesheet" href="./css/style.css" />
<!--[if (gt IE 8) | (IEMobile)]><!-->
  <link rel="stylesheet" href="./css/structure.css" />
<!--<![endif]-->
<!--[if (lt IE 9) & (!IEMobile)]>
  <link rel="stylesheet" href="./css/ie_structure.css" />
<![endif]-->

<link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700italic,800,800italic,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Tienne:400,700,900' rel='stylesheet' type='text/css'>

</head>
<body>
<?php include_once("analyticstracking.php") ?>
  <div class="grid-container" style="">

    <div class="grid-100 top-bar">
		<section class="main-navigation">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li>Contact</li>
			</ul>
		</section>
    </div>

	<div class="content-container">

		<div class="grid-100 header-container">
			<img src="./assets/KT_logo.png" width="138" height="138" style="padding-left: 80px; float: left; " />
			<span style="float: left; margin-left: 20px; ">
				<h1>
					Keep True Design
				</h1>
			</span>
			<span style="float: left; margin-left: 120px; margin-top: -20px; ">
				<h2>Building Unique and Engaging Experiences</h2>
			</span>
		</div>

		<div class="grid-100" style="text-align: right; margin-top: -24px; margin-left: -10px; ">
			<a href="http://www.facebook.com/KeepTrueDesign" target="_blank"><img src="./assets/facebook_icon.png" width="48px" height="48px" /></a>
			<a href="http://twitter.com/keeptruedesign" target="_blank"><img src="./assets/twitter_icon.png" width="48px" height="48px" /></a>
		</div>

		<div class="grid-100 body-container" style="margin-top: -30px; ">
			<h1>Get in touch</h1>
			<p>
				You can call directly, email, or just fill out the form below to get in touch.
				We'll provide a free estimate on your project, and we can typically respond within
				one business day.
			</p>
		</div>

		<hr />

		<div class="grid-100 body-container">
			<div class="grid-66" style="border-right: 1px solid gray; ">

				<div id="contact-form">

					<?php
						if (!empty($error))
						{
							echo '
							<p class="error">
								<strong>Your message was NOT sent. Did you remember to fill in ...</strong>
								<ul>' . $error . '</ul>
							</p>';
						}
						elseif (!empty($success))
						{
							echo $success;
						}
					?>

					<form action="contact.php" method="post">

						<label>Name:</label>
						<input type="text" name="name" title="How would you like to be known?" value="<?php if ($_POST['name']) { echo $_POST['name']; } ?>" />

						<label>Email:</label>
						<input type="text" name="email" title="An address where we can get back to you" value="<?php if ($_POST['email']) { echo $_POST['email']; } ?>" />

						<label>Message:</label><br />
						<textarea name="message" rows="20" cols="20" title="Let us know how can we help"><?php if ($_POST['message']) { echo $_POST['message']; } ?></textarea>

						<label><img src="captcha.php" /></label>
						<input type="text" name="code" title="Copy this code so we know you are a person">
						<br />

						<input type="submit" class="submit" name="submit" value="Send message" />

					  </form>
				</div>

			</div>
			<div class="grid-33" style="padding-left: 20px; ">
				<img src="./assets/phone.png" width="48px" height="48px" style="float: left; padding-right: 10px; " />
				<p>
					<strong>Phone</strong> <br />
					<span style="font-size: 0.75em; ">
						<script type="text/javascript" language="javascript">
						<!--
						// Email obfuscator script 2.1 by Tim Williams, University of Arizona
						// Random encryption key feature by Andrew Moulden, Site Engineering Ltd
						// This code is freeware provided these four comment lines remain intact
						// A wizard to generate this code is at http://www.jottings.com/obfuscator/
						{ coded = "(0bi) RFb - pbFb"
						  key = "fFNhscAR0aPuK9jp7tTlqgO1xXkYWU5wmnzoCBEbyHZVMSi8rQved23IJGDL46"
						  shift=coded.length
						  link=""
						  for (i=0; i<coded.length; i++) {
							if (key.indexOf(coded.charAt(i))==-1) {
							  ltr = coded.charAt(i)
							  link += (ltr)
							}
							else {
							  ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
							  link += (key.charAt(ltr))
							}
						  }
						document.write(link)
						}
						//-->
						</script><noscript>Sorry, you need Javascript on see my phone number.</noscript>
					</span>
				</p>

				<br />

				<img src="./assets/email.png" width="48px" height="48px" style="float: left; padding-right: 10px; " />
				<p>
					<strong>Email</strong> <br />
					<span style="font-size: 0.75em; ">
					<script type="text/javascript" language="javascript">
					<!--
					// Email obfuscator script 2.1 by Tim Williams, University of Arizona
					// Random encryption key feature by Andrew Moulden, Site Engineering Ltd
					// This code is freeware provided these four comment lines remain intact
					// A wizard to generate this code is at http://www.jottings.com/obfuscator/
					{ coded = "nu3v@qccCGLdc9cXnJu.ivQ"
					  key = "MfWutSCLogRwjaBmD6Ei2VXO31dGk8UvJI5eyhQ0zFnbNprHA9Tqx4ZYlPc7Ks"
					  shift=coded.length
					  link=""
					  for (i=0; i<coded.length; i++) {
						if (key.indexOf(coded.charAt(i))==-1) {
						  ltr = coded.charAt(i)
						  link += (ltr)
						}
						else {
						  ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
						  link += (key.charAt(ltr))
						}
					  }
					document.write("<a href='mailto:"+link+"'>"+link+"</a>")
					}
					//-->
					</script><noscript>Sorry, you need Javascript on to see this address.</noscript>
					</span>

				</p>
			</div>
		</div>

		<hr />
		<hr />

	</div>

	<div class="grid-100 bottom-bar">
		<section class="footer">
			<p style="float: left; ">
				Design by <a href="#">Keep True Design</a>
			</p>
			<p style="float: right; ">
				<?php
					echo "Last updated on " . date ("F d Y", getlastmod());
				?>
			</p>
		</section>
	</div>

  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <!--<script src="./js/responsive.js"></script>-->

  <script>
	$(function()
	{
		$(document).tooltip(
		{
			position:
			{
				my: "left+20 center",
				at: "right center"
			},

			show:
			{
				effect: "fadeIn",
				duration: 100
			},

			hide:
			{
				effect: "fadeOut",
				duration: 100
			}
		});
	});
</script>

</body>
</html>
