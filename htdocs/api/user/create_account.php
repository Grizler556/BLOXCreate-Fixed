<?php
function reCaptcha($recaptcha){
  $secret = "YOUR SECRET RECAPTCHA KEY";
  $ip = $_SERVER['REMOTE_ADDR'];

  $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
  $url = "https://www.google.com/recaptcha/api/siteverify";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
  $data = curl_exec($ch);
  curl_close($ch);

  return json_decode($data, true);
}

if (!$user) {
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$email = $_POST['email'];
$submit = $_POST['submit'];

function is_alphanumeric($username) {
return (bool)preg_match("/^([a-zA-Z0-9])+$/i", $username);
}

if ($submit) {
if (!$username||!$password||!$confirmpassword||!$email) {
echo "<div class='reg-alert'><p class='basic-font reg-alert-txt'>Please fill in all required fields</p></div>";
}
else {
$userExist1 = "SELECT * FROM users WHERE username=:username";
$userExist = $handler->prepare($userExist1);
$userExist->execute(array(':username' => $username));
$userExist = ($userExist->rowCount());
if ($userExist > 0) {
echo "<div class='reg-alert'><p class='basic-font reg-alert-txt'>That username already exists</p></div>";
}
else {
if ($password != $confirmpassword) {
echo "<div class='reg-alert'><p class='basic-font reg-alert-txt'>Your password and confirm password does not match</p></div>";
}
else {
if (strlen($username) >= 15) {
echo "<div class='reg-alert'><p class='basic-font reg-alert-txt'>Your username is too long</p></div>";
}
elseif (strlen($username) < 3) {
echo "<div class='reg-alert'><p class='basic-font reg-alert-txt'>Your username is too short</p></div>";
}
elseif (strlen($password) <= 4) {
echo "<div class='reg-alert'><p class='basic-font reg-alert-txt'>Your password is too short</p></div>";
}
elseif (!is_alphanumeric($username)) {
echo "<div class='reg-alert'><p class='basic-font reg-alert-txt'>You username contains some invalid characters</p></div>";
} else {
$recaptcha = $_POST['g-recaptcha-response'];
$res = reCaptcha($recaptcha);
if($res['success']){
$encrypt1 = hash('sha512',$password);
$encrypt = hash('sha512',$encrypt1);
$date = time();
session_start();
$_SESSION['username'] = $user;
$_SESSION['hash'] = $encrypt;
$ip = $_SERVER['REMOTE_ADDR'];
$data1 = "INSERT INTO users (username, password, email, ip, datecreated) VALUES (:username, :password, :email, :ip, :datecreated)";
$data2 = $handler->prepare($data1);
$data2->execute(array(':username' => $username, ':password' => $encrypt, ':email' => $email, ':ip' => $ip, ':datecreated' => $date));
$giveEmeralds = $handler->query("UPDATE users SET emeralds=5 WHERE username='$username'");
header("Location: ../../Login");
exit();
}
}
}
}
}
}
} else {
header("Location: ../../Login/");
exit();	
}
?>
