<!-- require the header file -->
<?php require APPROOT .'/views/inc/header.php';?>

<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="hpanel">
				<div class="panel-body text-center lock-inner">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<br/>
					<h4><span class="text-success">3:43:15 PM</span> <strong>Friday, February 27, 2015</strong></h4>
					<p>Your are in lock screen. Main app was shut down and you need to enter your passwor to go back to app.</p>
					<form action="#" class="m-t">
						<div class="form-group">
							<input type="password" required="" placeholder="******" class="form-control">
						</div>
						<button class="btn btn-primary block full-width" type="submit">Unlock</button>
					</form>
				</div>
			</div>

<!-- require the footer file -->
<?php require APPROOT .'/views/inc/footer.php';?>
