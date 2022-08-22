<?php include "../../header.php";


$id=$_GET['id'];
$getTopic = $handler->prepare("SELECT * FROM topics WHERE id=:id");
$getTopic->bindParam(':id', $id, PDO::PARAM_INT);
$getTopic->execute();

$topic = $getTopic->fetch(PDO::FETCH_OBJ) ?>




<div style="padding-top:5px;"></div>

<div class="container" style="width:100%;">
<a href="/Forum/Create?id=<?php echo $id ?>" class="waves-effect waves-light btn">Create Thread</a>


<div class="light-blue" style="color:white;padding:15px 25px;">

<div class="row valign-wrapper" style="margin-bottom:0;">

<div class="col s8 m8 l8 valign">

<div style="font-size:16px;"><?php echo $topic->name ?></div>

</div>

<div class="col s2 m2 l1 center-align valign">

<div style="font-size:16px;">Views</div>

</div>

<div class="col s2 m2 l1 center-align valign">

<div style="font-size:16px;">Replies</div>

</div>

<div class="col s12 m12 l2 valign right-align hide-on-med-and-down">

<div style="font-size:16px;">Posted By</div>

</div>

</div>

</div>



<?php $getThreads = $handler->prepare("SELECT * FROM threads WHERE topicId=:id ORDER BY threadId DESC LIMIT 10");
$getThreads->bindParam(':id',$id, PDO::PARAM_INT);
$getThreads->execute();

while($gT = $getThreads->fetch(PDO::FETCH_OBJ)){ 

$getReplies = $handler->prepare("SELECT * FROM replies WHERE threadId='$gT->threadId'"); ?>



<div style="background:#ffffff;padding:15px 25px;border:1px solid #e8e8e8;border-top:0;font-size:14px;" class="gray-hover">

<div class="row valign-wrapper" style="margin-bottom:0;">

<div class="col s8 m8 l8 valign">

<a href="/Forum/Thread?id=<?php echo $gT->threadId ?>" style="color:#333;">

<div style="font-size:16px;font-weight:500;"><?php echo htmlspecialchars($gT->threadTitle); ?></div>

</a>

</div>

<div class="col s2 m2 l1 center-align valign" style="color:#777;">

<?php echo $getReplies->rowCount(); ?></div>

<div class="col s2 m2 l1 center-align valign" style="color:#777;">

<?php echo $getReplies->rowCount(); ?></div>

<div class="col s12 m12 l2 valign right-align hide-on-med-and-down">



<div class="chip">

    <?php echo $gT->threadAdmin ?>

    

  </div>

</div>

</div>

</div>



<?php } ?>



</div>