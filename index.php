<?php
	include("functions.php");
	session_start();
	$login_fail = false;
	if(isset($_POST['submit']) && $_POST['submit'] == "Login")
	{
		if(login($_POST['email'], $_POST['password']))
		{
			if(isset($_SESSION['username']))
				header("location: ./main.php");
		}else
			$login_fail = true;
	}
	
	if(isset($_POST['submit']) && $_POST['submit'] == "Submit")
	{
		$account_error = false;
		if(create_account($_POST['email'], $_POST['living'], $_POST['password']))
		{
			if(isset($_SESSION['username']))
				header("location: ./main.php");
		}
		else
			$account_error = true;
	}
?>
<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en">

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APU Trade</title>

  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.css">

  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- body content here -->
   <div class="off-canvas-wrap" data-offcanvas>
	    <div class="inner-wrap" style="min-height: 100%;">
		    <nav class="top-bar" data-topbar role="navigation">
			    <ul class="title-area">
					<li class="name">
						<h1><a href="<?php if(isset($_SESSION['username'])) echo "main.php"; else echo "index.php"; ?>">APUTrade</a></h1>
					</li>
					<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
					<li class="toggle-topbar menu-icon"><a class="right-off-canvas-toggle" href="#right_menu"><span></span></a></li>
				</ul>
				<section class="top-bar-section">
					<!-- Right Nav Section -->
					<ul class="right">
						<li class="has-form"><a href="/index.php?page=login" class="button">Login</a></li>
			    	</ul>
				</section>
			</nav>
			
			<nav aria-hidden="true" id="right_menu" class="right-off-canvas-menu">
					<ul class="off-canvas-list">
						<label>Navigation</label>
						<li><a href="index.php?page=login">Login</a></li>
					</ul>
			</nav>
	
			<div class="login_panel panel.radius">
				<?php
					$page = $_GET['page'];
					switch($page)
					{
						case 'login':
							if($login_fail)
								echo("<span style='color:red;'>Bad Username/Password</span>");
							include("includes/login_form.php");
							break;
						default:
							if($account_error)
								echo("Error Creating Account: This email may already have been used.");
							include("includes/signup_form.php");
							break;
					}
				?>
			</div>
			<a class="exit-off-canvas"></a>
			<?php
				include("includes/footer.php");
			?>
	    </div>
   </div>
	
	<script src="js/vendor/modernizr.js"></script>
	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/foundation/foundation.js"></script>
	<script src="js/foundation/foundation.topbar.js"></script>
	<script src="js/foundation/foundation.abide.js"></script>
	<script>
    	$(document).foundation();
	</script>
</body>
</html>