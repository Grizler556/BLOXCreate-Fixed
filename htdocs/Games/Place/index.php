<? include "../../header.php";
$id = $_GET['id'];
$baseplate = $handler->prepare("SELECT * FROM games WHERE id=:id");
$baseplate->bindParam(':id', $id, PDO::PARAM_INT);
$baseplate->execute();
$gB = $baseplate->fetch(PDO::FETCH_OBJ);

?>
</center>
<div class="col s12 m9 l8">
<div class="container" style="width:100%;">
<h5><? echo "$gB->title"; ?></h5>
<div class="content-box">
<div class="row" style="margin-bottom:0;">
<div class="col s12 m12 l8">
<img src="http://i.imgur.com/tWj4Ohs.png" style="width:900px;height:350px;" class="responsive-img">
</div>
<div class="col s12 m12 l4 center-align">
<div style="width:50%;margin:0 auto;">
<a href="#"><div style="width:150px;height:150px;border:1px solid #eee;overflow:hidden;margin:0 auto;" class="circle">
<iframe src="/avatarname.php?name=<?php echo $gB->owner; ?>" style="width:200px;height:200px;border:0px;margin-left:-30px;" scrolling="no"></iframe></div>
<div style="padding-top:5px;font-size:16px;"><a href="#"><? echo "$gB->owner"; ?></a></div>
</div>
<div style="width:75%;margin:0 auto;padding-top:25px;">
<a href="/Games/Play/<?php echo $gB->play;?>">
  <div id="play" class="play-game">
    Play
  </div>
</a>
</div>
</div>
</div>
<div class="row" style="padding-top:15px;margin-bottom:0;">
<div class="col s12 m12 l3 center-align">
<div style="font-size:22px;"><? echo "$gB->Created"; ?></div>
<div style="color:#999;">Date Created</div>
</div>
<div class="col s12 m12 l3 center-align">
<div style="font-size:22px;"><? echo "$gB->Created"; ?></div>
<div style="color:#999;">Last Updated</div>
</div>
</div>
</div>
<div style="height:25px;"></div>
<div style="color:#666666;font-weight:bold;font-size:14px;">DESCRIPTION</div>
<div class="content-box">
<div style="font-size:14px;"><? echo "$gB->description"; ?></div>
</div>
<div style="height:25px;"></div>
</div>
</div>
</div>
</div>
<? include "../../footer.php"; ?>