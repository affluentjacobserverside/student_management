<!-- require the header file -->
<?php require APPROOT .'/views/inc/header.php';?>


<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center ps-recovered">
				<h3>PASSWORD RECOVER</h3>
				<p>Please fill the form to recover your password</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body poss-recover">
                        <p>
                            Enter your email address and your password will be reset and emailed to you.
                        </p>
                        <form action="#" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you email adress" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Your registered email address</span>
                            </div>

                            <button class="btn btn-success btn-block">Reset password</button>
                        </form>
                    </div>
                </div>
			</div>

<!-- require the footer file -->
<?php require APPROOT .'/views/inc/footer.php';?>
