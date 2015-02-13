<?php
	include("functions.php");
	session_start();
	require_once("db_con.php");
	
	
	if(!isset($_SESSION['username']))
		header("location: index.php");
	
	if(isset($_POST['sign_out']))
	{
		$_SESSION = array();
		session_destroy();
		header("location: index.php");
		
	}
	if(isset($_POST['submit']) && $_POST['submit'] == "Post")
	{
		create_post($_POST['subject'], $_POST['message'], $_POST['price'], $_SESSION['username']);
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

  <script src="js/vendor/modernizr.js"></script>

</head>
<body class="antialiased hide-extras">

  <!-- body content here -->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/foundation/foundation.abide.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <script>
    $(document).foundation();
  </script>
  
  <div class="off-canvas-wrap" data-offcanvas>
	    <div class="inner-wrap">
		     <nav class="top-bar" style="margin-bottom: 10%;" data-topbar role="navigation">
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
						<li class="has-form"><form method="post" action="main.php">
							<input type="submit" name="sign_out" value="Sign Out" class="button" />
						</form></li>
			    	</ul>
				</section>
			</nav>
			<aside id="right_menu" class="right-off-canvas-menu">
					<ul class="off-canvas-list">
						<label>Navigation</label>
						<form method="post" action="main.php">
							<input type="submit" name="sign_out" value="Sign_Out" class="button" />
						</form>
					</ul>
			</aside>
		<?php
			if(!isset($_GET['page']))
			{
		?>
			<!-- Floating Large Buttons using grid layout -->
			<ul class="main_area large-block-grid-2">
				<li>
					<a href="/main.php?page=view">
						<div class="panel radius main_panel">
							<h1>View Posts</h1>
							<img src="img/list.png" alt="list" width="200px" />
						</div>
					</a>
				</li>
				<li>
					<a href="/main.php?page=create">
						<div class="panel radius main_panel">
							<h1>Create Posts</h1>
							<img src="img/create.png" alt="create" width="200px" />
						</div>
					</a>
				</li>
			</ul>
		<?php
			}
			else
			{
				if($_GET['page'] == "view")
					include("includes/view_posts.php");
				if($_GET['page'] == "create")
					include("includes/create_post.php");
			}
		?>
			<a class="exit-off-canvas"></a>
			<?php
				include("includes/footer.php");
			?>
	    </div>
   </div>
</body>
</html>