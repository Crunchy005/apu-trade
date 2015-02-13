<div class="panel row" style="background-color: black;border:0px;margin-top:10%;margin-bottom:10%;">
	<form style="margin:auto;" method="post" action="main.php">
		<div class="row">
			<div class="large-12 columns"
				<label style="color:white;">Subject: 
					<input type="text" name="subject" />
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label>Message: 
					<textarea name="message"></textarea>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<div class="row collapse">
					<div class="large-10 columns">
						<label>Price: 
							<input type="text" name="price" pattern="[0-9]+" required />
						</label>
					</div>
					<div class="large-2 columns" style="margin-top:-3px;">
						<br>
						<input type="submit" name="submit" value="Post" class="button postfix" />
					</div>
				</div>
			</div>
		</div>
	</form>
</div>