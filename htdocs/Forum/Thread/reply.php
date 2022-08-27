<?php

include($_SERVER['DOCUMENT_ROOT']."/header.php");

$id = $_GET['id'];

if($user){

?>
<div class="container" style="width:100%;">

<div class="light-blue" style="color:white;padding:15px 25px;">

<div style="font-size:18px;">Create Reply</div>

</div>

<div class="col s12 m9 l8">

<div class="content-box"></br>

<form action="" method="post" >

<input type="text" name="post" id="post" class="general-textbar" placeholder="Enter reply here" name="csrf_token" value="VoCrOP9owOTkoCXLNxpR5AkeGaiTYAhk1xH1Bjyivso=">



<div style="height:15px;"></div>

<button type="submit" name="save" class="waves-effect waves-light btn light-blue lighten-1" style="display:block;">Post</button>

</form>

</div>

</div></div>



<?

if(isset($_POST['save'])){

$body=$_POST["post"];

$hi = $handler->prepare("INSERT INTO replies (threadId, postBy, postText) VALUES (:id,'$user',:post)");
$hi->bindParam(':id', $id, PDO::PARAM_INT);
$hi->bindParam(':post', $_POST["post"], PDO::PARAM_STR);
$hi->execute();

header("Location: /Forum");

} include($_SERVER['DOCUMENT_ROOT']."/footer.php"); }

?>
