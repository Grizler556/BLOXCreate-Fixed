<?php include "../../header.php";
$id = $_GET['id'];
$item = $handler->prepare("SELECT * FROM items WHERE id=:id");
$item->bindParam(':id', $id, PDO::PARAM_INT);
$item->execute();
$gI = $item->fetch(PDO::FETCH_OBJ);
$handler->query("UPDATE `users` SET `$gI->type`='$gI->wearable' WHERE `id`='$myu->id'");
?>

<head><meta http-equiv="refresh" content="1; url=/Customize/"></head>