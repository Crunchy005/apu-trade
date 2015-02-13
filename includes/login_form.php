<form data-abide action="/index.php?page=login" method="post" novalidate="novalidate">
	<div class="row">
		<div class="large-12 columns">
			<h2>Login</h2>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="input-wrapper">
				<label style="color: white;">E-Mail: 
					<input type="email" name="email" class="large-12.columns" placeholder="E-Mail" required pattern="(.@apu.edu)$" />
				</label>
				<small class="error">Please enter a valid email</small>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="row collapse">
				<div class="small-10 columns">
					<label style="color: white;">Password: 
						<input type="password" name="password" placeholder="Password" required pattern="[a-zA-Z0-9]+" />
					</label>
					<small class="error">Please Enter a password.</small>
				</div>
		        <div class="small-2 columns" style="margin-top:-3px;">
			        <br>			
					<input type="submit" name="submit" value="Login" class="button postfix" />
				</div>
			</div>
		</div>
	</div>
</form>