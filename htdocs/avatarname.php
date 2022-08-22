<?php
include ("Site/init.php");
?>
<?php
// This is where the magic happens :)
$id=$_GET['name'];
$avatar = $handler->prepare("SELECT * FROM users WHERE username=:id");
$avatar->bindParam(':id', $id, PDO::PARAM_INT);
$avatar->execute();
$avafetch = $avatar->fetch(PDO::FETCH_OBJ); 
?>

<div style="position:absolute; width:186; height:186; z-index:2;background-image:url('../Market/Storage/<?php echo htmlspecialchars($avafetch->pants); ?>');"></div>
<div style="position:absolute; width:186; height:186; z-index:3;background-image:url('../Market/Storage/<?php echo htmlspecialchars($avafetch->shirt); ?>');"></div>
<div style="position:absolute; width:186; height:186; z-index:4; background-image:url('../Market/Storage/<?php echo htmlspecialchars($avafetch->face); ?>');"></div>
<div style="position:absolute; width:186; height:186; z-index:5; background-image:url('../Market/Storage/<?php echo htmlspecialchars($avafetch->accessory); ?>');"></div>
<div style="position:absolute; width:186; height:186; z-index:6; background-image:url('../Market/Storage/<?php echo htmlspecialchars($avafetch->hat); ?>');"></div>
<div style="position:absolute; width:186; height:186; z-index:1; background-image:url('../Market/Storage/<?php echo htmlspecialchars($avafetch->package);?>');"></div>
