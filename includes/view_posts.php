<div class="panel row">	
	<h1>Recent Posts</h1>
</div>
<?php
	$q = "select * from POSTS";
	$result = mysqli_query($con, $q) or die ("Error getting posts " . mysqli_error($con));
	while($result_array = mysqli_fetch_assoc($result))
	{
		$subject = $result_array['M_SUBJECT'];
		$message = $result_array['MESSAGE'];
		$price = $result_array['PRICE'];
		$date = $result_array['M_DATE'];
		$email = $result_array['EMAIL'];
		echo("<div class='panel row'>");
		echo("<div class='medium-12 columns'>\n");
		echo("<div class='medium-4 columns'>\n");
		echo("Email: $email<br><br>\n");
		echo("Subject: $subject<br><br>\n");
		echo("Price: $$price\n");
		echo("</div>\n");
		echo("<div class='medium-8 columns'>");
		echo("$message");
		echo("</div>\n</div>");
		echo("</div>");
	}
?>