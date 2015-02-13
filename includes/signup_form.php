<form action="/" method="post" data-abide>
	<div class="row">
		<div class="large-12 columns">
			<h2>Sign Up</h2>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<label>E-Mail: 
				<input type="email" name="email" class="large-12.columns" placeholder="E-Mail" required pattern="(.@apu.edu)$" />
			</label>
			<small class="error">Please enter a valid apu.edu email</small>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="row collapse">
				<label>Living Area: </label>
				<div class="large-12 columns">
					<select name="living">
						<option value="University Village">University Village</option>
						<option value="University Park">University Park</option>
						<option value="Mods">Mods</option>
						<option value="Adams Hall">Adams Hall</option>
						<option value="Smith Hall">Smith Hall</option>
						<option value="Engstrom">Engstrom</option>
						<option value="Alosta Place">Alosta Place</option>
						<option value="Bowles">Bowles</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="row collapse">
				<label>Password: 
					<input type="password" id="password" name="password" placeholder="Password" required pattern="^(?=\S*[^a-zA-Z])(?=\S*[A-Z])(?=\S*[!@#$%^&*])\S{8,}$" />
				</label>
				<small class="error">Passwords must be at least 8 characters with 1 capital letter, 1 number, and one special character.</small>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="row collapse">
				<label>Confirm Password: 
					<input type="password" name="confirm_pass" required data-equalto="password" placeholder="Password" />
				</label>
				<small class="error">Passwords do not match</small>
				<input type="submit" name="submit" value="Submit" class="button postfix" />
			</div>
		</div>
	</div>
</form>