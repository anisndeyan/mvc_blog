<div class="container">
	<form method='POST'>
	  <div class="form-group">
		<label for="email">Email address:</label>
		<input type="email" name="email" class="form-control" id="email">
	  </div>
	  <div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" name='pass' class="form-control" id="pwd">
	  </div>
	  <div class="checkbox">
		<label><input type="checkbox"> Remember me</label>
	  </div>
	  <button type="submit" name="login" class="btn btn-default">Log In</button>
	</form>
		
<?php
	if(isset($this->error)) {
?>

		<div class="alert alert-warning">
		  <strong>Warning!</strong> <?= $this->error; ?>
		</div>

<?php
	}
?>
</div>