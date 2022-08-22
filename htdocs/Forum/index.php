<?php include "../header.php"; ?>



<div class="container" style="width:100%;">



<div class="light-blue" style="color:white;padding:15px 25px;">

<div class="row valign-wrapper" style="margin-bottom:0;">

<div class="col s8 m8 l8 valign">

<div style="font-size:16px;">BLOX Create</div>

</div>

<div class="col s2 m2 l1 center-align valign">

<div style="font-size:16px;">Threads</div>

</div>

<div class="col s2 m2 l1 center-align valign">

<div style="font-size:16px;">Replies</div>

</div>

</div>

</div>



<? $getTopic = $handler->query("SELECT * FROM topics ORDER BY id ASC");

while($gT = $getTopic->fetch(PDO::FETCH_OBJ)){ 

$threads = $handler->query("SELECT * FROM threads WHERE topicId='$gT->id'");

$replies = $handler->query("SELECT * FROM replies");

?>



<div style="background:#ffffff;padding:15px 25px;border:1px solid #e8e8e8;border-top:0;font-size:14px;" class="gray-hover">

<div class="row valign-wrapper" style="margin-bottom:0;">

<div class="col s8 m8 l8 valign">

<a href="./Topic?id=<? echo $gT->id ?>" style="color:#333;">

<div style="font-size:16px;font-weight:500;"><? echo $gT->name ?></div>

<div style="font-size:13px;color:#555;"><? echo $gT->description ?></div>

</a>

</div>

<div class="col s2 m2 l1 center-align valign" style="color:#777;">

<? echo $threads->rowCount(); ?></div>

<div class="col s2 m2 l1 center-align valign" style="color:#777;">

<? echo $replies->rowCount(); ?></div>

</div>

</div>

<? } include "../footer.php"; ?>