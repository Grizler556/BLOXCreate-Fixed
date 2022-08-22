<?php include('Site/init.php'); error_reporting(1); ?>

<head>
<title>BLOX Create | <?php echo $name; ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" async="" src="/Style/javascript.js"></script>
<link rel="stylesheet" href="/Style/default.css">
<link rel="stylesheet" href="/Style/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<nav style="box-shadow:none;" class="main-nav">
<div class="nav-wrapper light-red darken-2">
<a href="/" class="brand-logo">
<img src="http://i.imgur.com/2P4Qsbm.png" height="50" style="margin-top:5px;margin-left:8px;">
</a>
<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
<ul class="left hide-on-med-and-down" style="margin-left:65px;">
<li><a href="/" style="font-size:16px;">Home</a></li>
<li><a href="/Players" style="font-size:16px;">Users</a></li>
<li><a href="/Games" style="font-size:16px;">Games</a></li>
<li><a href="/Market" style="font-size:16px;">Catalog</a></li>
<li><a href="/Groups" style="font-size:16px;">Groups</a></li>
<li><a href="/Forum" style="font-size:16px;">Forum</a></li>
</ul>
<ul class="right hide-on-med-and-down">

<?php
if (!$user) {
?>
<li><a href="/Login">Login</a></li>
<li><a href="/Register">Register</a></li>
<? } else { ?>
<li>
<a href="#" style="color:white;font-size:16px;" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cash" data-tooltip-id="20c7f21f-cf71-b7fa-6a38-adc331a4e85a">
<i class="material-icons left" style="font-size:14px;margin-right:6px;margin-top:-1px;">monetization_on</i><?php echo "$myu->emeralds"; ?>
</a>
</li>
<li>


<li><a href="/Customize" style="font-size:16px;"><?php echo "$user";?></a></li>
</li>
<?php } ?>

<ul class="right hide-on-med-and-down">
<?php
if (!$user) {
?>
<li><a href="/user/logout.php"><?php echo "$user"; ?></a></li>
<? } ?>
<ul class="side-nav" id="mobile-demo" style="transform: translateX(-100%);">
<li><a href="/Games/">Games</a></li>
<li><a href="/Market/">Market</a></li>
<li><a href="/Players">Users</a></li>
<li><a href="/Groups">Groups</a></li>
<li><a href="/Forum">Forum</a></li>
<li><a href="/Upgrades">Upgrade</a></li>
<li><a href="/Blog">Blog</a></li>
</div>
</nav>
			</ul>
		</div>
<?php
if ($user) {
?>
<div class="card-panel blue-grey darken-2 center-align" style="color:white;margin:0;box-shadow:none;padding:0;padding:15px 0;margin-top:60px;font-size:18px;">
<a href="/Market" style="color:white">You can change this text in header.php!</a>
</div>
<? } ?>
<div style="padding-top:85px;"></div>