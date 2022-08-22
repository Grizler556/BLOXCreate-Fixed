<?php include "../../header.php"; 

$id = $_GET['id'];

$thread = $handler->prepare("SELECT * FROM threads WHERE threadId=:id");
$thread->bindParam(':id', $id, PDO::PARAM_INT);
$thread->execute();

$replies = $handler->prepare("SELECT * FROM replies WHERE threadId=:id");
$replies->bindParam(':id', $id, PDO::PARAM_INT);
$replies->execute();

$gT = $thread->fetch(PDO::FETCH_OBJ);

?> <div class="container" style="width:100%;">



<?php if ($myu->admin == "true"){ ?>

<a href="/Forum/Thread/delete.php?id=<?php echo $id?>" class="waves-effect waves-light btn">Delete Thread</a>

<div style="padding-top:5px;">

<?php } ?>



<div class="light-blue" style="color:white;padding:15px 25px;">

<div style="font-size:18px;"><?php echo htmlspecialchars($gT->threadTitle); ?></div>

</div>

<div class="content-box" style="background:#ffffff; border:1px solid #e8e8e8; border-top:0;border-radius:0;"></br>

<div class="row">

<div class="col s3 center-align">



<?php $adminn = $handler->query("SELECT * FROM users WHERE username='$gT->threadAdmin'"); 

$admin = $adminn->fetch(PDO::FETCH_OBJ); ?>
<a href="/Profile?id=<?php echo $admin->id ?>"><?php echo $gT->threadAdmin ?><br></a>
<a href="/Profile?id=<?php echo $admin->id ?>">

<iframe frameborder="0" src="/avatar.php?id=<?php echo $admin->id ?>" scrolling="no" style=" width: 200px; height: 200px"></iframe>

</a>

</div>

<div class="col s9">

<div class="row" style="margin-bottom:0;">

<div class="col s6">

</div>

</div>

<div style="word-break:break-word;"><?php echo htmlspecialchars($gT->threadBody); ?></div>

</div>

</div></br>

</div>



<?php while($gR = $replies->fetch(PDO::FETCH_OBJ)){ ?>

<div class="content-box" style="background:#ffffff; border:1px solid #e8e8e8; border-top:0;border-radius:0;"></br>

<div class="row">

<div class="col s3 center-align">


<?php $poster = $handler->query("SELECT * FROM users WHERE username='$gR->postBy'"); 

$postby = $poster->fetch(PDO::FETCH_OBJ); ?>
<a href="/Profile?id=<?php echo $postby->id ?>"><?php echo $gR->postBy ?><br></a>
<a href="/Profile?id=<?php echo $postby->id ?>">

<iframe frameborder="0" src="/avatar.php?id=<?php echo $postby->id ?>" scrolling="no" style=" width: 200px; height: 200px"></iframe>

</a>

</div>

<div class="col s9">

<div class="row" style="margin-bottom:0;">

<div class="col s6">

</div>

</div>

<div style="word-break:break-word;"><?php echo htmlspecialchars($gR->postText); ?></div>

</div>

</div></br>

</div>

<?php } ?>



<center></br><a href="reply.php?id=<?php echo $id ?>" class="waves-effect waves-light btn grey darken-2" style="display:block; width:150px;">Reply</a></br>

<?php include "../../footer.php"; ?>