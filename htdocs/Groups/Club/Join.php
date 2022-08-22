<?php include "../../header.php"; 

if($user){

$id = $_GET['id'];

$groupjoining = $handler->prepare("INSERT INTO groupmembers (userid, groupid) VALUES ('$myu->id',':id')");
$groupjoining->bindParam(':id',$id, PDO::PARAM_INT);
$groupjoining->execute();

}

header('Location: /Groups');

?>