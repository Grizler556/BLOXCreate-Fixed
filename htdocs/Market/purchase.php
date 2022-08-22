<? include "../header.php";
if ($user){
$money=$myu->emeralds;
$id=$_GET['id'];
$item = $handler->prepare("SELECT * FROM items WHERE id=:id");
$item->bindParam(':id', $id, PDO::PARAM_INT);
$item->execute();

$itemown = $handler->prepare("SELECT item FROM inventory");
$iO = $itemown->fetch(PDO::FETCH_OBJ);
$itemownuser = $handler->prepare("SELECT user FROM inventory");
$iOu = $itemownuser->fetch(PDO::FETCH_OBJ);

if ($iO == $id){
    if ($iOu == $myu->id) {
        echo'<center><h2>no</h2></center>';
    }
}

$gB = $item->fetch(PDO::FETCH_OBJ);
if ($gB->onsale == 1){
if ($money > $gB->price){
$new = ($money - $gB->price);
$handler->query("UPDATE `users` SET `emeralds`='$new' WHERE `id`='$myu->id'");
$handler->query("INSERT INTO inventory (item,user) VALUES ($id,$myu->id)");
}
} else {
?> <center><h2>Item not on sale!</h2></center> <?
}
}
?>

<head><meta http-equiv="refresh" content="1; url=/Customize/"></head>