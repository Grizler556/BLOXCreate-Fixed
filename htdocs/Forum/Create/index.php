<?php

include($_SERVER['DOCUMENT_ROOT']."/header.php");

if($user){

?>
<div class="container" style="width:100%;">
<div class="light-blue lighten-1" style="color:white;padding:15px 25px;">

<div style="font-size:18px;">Create Thread</div>

</div>

<div class="col s12 m9 l8">

<div class="container" style="width:100%;">

<div class="content-box">

<form action="" method="post">

<input type="text" name="title" id="title" class="general-textbar" placeholder="Title">

<div style="height:15px;"></div>

<input type="text" name="post" size="20" id="post" class="general-textbar" placeholder="Body">



<div style="height:15px;"></div>

<button type="submit" name="save" class="waves-effect waves-light btn light-blue darken-2" style="display:block;">Post</button>

</form>

</div>

</div>

</div>

</div>


<?



if(isset($_POST['save'])){

$body=$_POST["post"];



$hi = $handler->prepare("INSERT INTO threads (threadAdmin, threadTitle, threadBody) VALUES ('$user', :title, :post)");
$hi->bindParam(':title', $_POST["title"], PDO::PARAM_STR);
$hi->bindParam(':post', $_POST["post"], PDO::PARAM_STR);
$hi->execute();

header("Location: /Forum");

} include($_SERVER['DOCUMENT_ROOT']."/footer.php");



} ?>