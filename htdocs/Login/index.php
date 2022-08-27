<?php
$name = 'Login';
include('../header.php');
?>
<?php
if ($user) {
?>
<?php header("Location: /index.php"); ?>
<?php
} else {
?>
<div class="content-box" style="min-width:400px;width:400px;margin:0 auto;">
		<div class="signin-hold">
<?php
include('../api/user/sign_in_account.php');
?>
			<form method="post" class="sign-form basic-font">
<h5 style="padding:0;margin:0;padding-bottom:25px;">Log in</h5>
<input type="text" name="username" id="username" class="general-textarea" placeholder="Username">
<div style="height:15px;"></div>
<input type="password" name="password" id="password" class="general-textarea" placeholder="Password">
<div style="height:15px;"></div>
<input type="submit" name="submit" class="groups-blue-button" style="padding:0;padding:4px 8px;" value="Log in">
				<input type="hidden" name="csrf-token" value="CIwNZNlR4XbisJF39I8yWnWX9wX4WFoz"/>
			</form>
		</div>
<?php
}
?>
<?php
include('footer.php');
?>
