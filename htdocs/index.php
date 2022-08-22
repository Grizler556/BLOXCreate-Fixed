<?php
$name = "Home";
include('header.php');
?>
<?php
$id = $myu->id;
if ($user) {
?>
<center><h2>Welcome, <?php echo "$user"; ?></h2>
</center><div class="col s12 m9 l8">
<div class="container" style="width:100%;">
<div class="row">
<div class="col s12 m12 l3">
<div class="content-box">
<iframe src="http://bloxcreatefixed.rf.gd/avatar.php?id=<?php echo $myu->id ?>" style="width:200px;height:200px;border:0px;" scrolling="no"></iframe></div>
<div style="height:25px;"></div>
<div class="header-text" style="font-size:18px;">Announcements</div>
<div class="content-box">
<a target="_blank" style="font-size:16px;color:#444444;"><div>Games Release</div></a><div style="font-size:12px;color:#666666;">Hello citizens of BLOX Create, we have officially released games as of 2/18/2017</div><div style="height:25px;"></div><a target="_blank" style="font-size:16px;color:#444444;"></a>
</div>
</div>
</div>
</div>
</div>
<?php
} else {
header('Location: /Landing');
}
?>
<?php
include('footer.php');
?>