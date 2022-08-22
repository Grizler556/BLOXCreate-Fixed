<?php
$id=$_GET['id'];
include('../header.php');
?>
</center>
<?php
if (!$id) {
echo "error";
} else {
$getUser = $handler->prepare("SELECT * FROM users WHERE id=:id");
$getUser->bindParam(':id', $id, PDO::PARAM_INT);
$getUser->execute();
$gU = $getUser->fetch(PDO::FETCH_OBJ);
$userExist = ($getUser->rowCount());
if ($userExist == "0") {
echo "error user not found";
} else {
?>
		<div class="profile-wrap">
			<div class="profile-frst-wrp">
				<div class="profile-ava-stacker">
<?php


}
}
?>
<div class="entire-page-wrapper">

<div class="row">
<div class="col s12 m12 l3">
<? echo "
<p class='basic-font profile-name'>$gU->username</p>
"; ?>
<div class="content-box" style="padding:0;text-align:center;margin:0;">
</ul>
<iframe src="http://bloxcreatefixed.rf.gd/avatar.php?id=<?php echo htmlspecialchars($gU->id);?>" style="border:none;width:200px;height:200px;"></iframe><a class="material-icons" href="#" title="Send a message" style="background:#2196F3;color:white;padding:4px 4px;font-size:14px;font-weight:500;border:0;border-radius:2px;border-bottom:1px solid #207FC9;outline:none;font-size:20px;">mail</a>
&nbsp;
<form action="#" method="POST" style="display:inline-block;">
<input type="hidden" name="ID" value="43701">
<input type="hidden" name="csrf_token" value="o2IUL6GpTJ5+sS9l6/AfyZDJGsuts0QA/slpJrzfoVA=">
<input type="submit" name="submit" value="add_circle" class="material-icons" title="Add as friend" style="background:#15BF6B;color:white;padding:4px 4px;font-size:14px;font-weight:500;border:0;border-radius:2px;border-bottom:1px solid #15BF6B;outline:none;font-size:20px;">
</form>
<div style="height:10px;"></div>
</div>
<div id="UserStatus" style="float:right;"><div class="user-offline" title="Last seen yesterday">&nbsp;</div></div>
<div class="content-box" style="padding:15px;font-size:14px;margin-top:15px;">
<center>
<table style="text-align:center;padding:0;margin:0;">
<tbody>
<tr>
<td style="font-weight:bold;text-align:right;width:45%;">Date Joined:</td>
<td style="font-weight:normal;text-align:center;width:55%;"><?php echo (date("Y-m-d",$gU->datecreated)); ?></td>
</tr>
</tbody>
</table>
</center>
</div>

</div>
<div class="col s12 m12 l9" style="margin-bottom:15px;">
<div style="height:5px;"></div>
<div class="header-text" style="font-size:18px;">Description</div>
<div class="content-box" style="padding:15px;">
<div style="color:#555555;font-size:14px;"><? echo "
<p class='basic-font profile-name'>$gU->description</p>
"; ?></div>
</div>
<div class="header-text" style="float:left;font-size:18px;padding-top:10px;">Inventory</div>
<br style="clear:both;">
<div class="content-box">
<style>.hover-items a:hover{color:#999999!important;}</style>
<a name="inventory"></a>
<div class="row" style="margin-bottom:0;">
<?php
$getinv = $handler->prepare("SELECT * FROM inventory WHERE user=:id ORDER BY item DESC");
$getinv->bindParam(':id', $id, PDO::PARAM_INT);
$getinv->execute();
while($gIN = $getinv->fetch(PDO::FETCH_OBJ)){ 
$item = $handler->query("SELECT * FROM items WHERE id=".$gIN->item); 
$gI = $item->fetch(PDO::FETCH_OBJ) ?>

<div class="col s3 center-align" style="padding:15px;">
<div style="position:relative;">
<a href="/Market/Items?id=<? echo $gI->id ?>"><img src="<? echo $gI->image ?>" style="display:block;height:125px;width:125px;"></a>
<a href="/Market/Items?id=<? echo $gI->id ?>"><div style="padding-top:3px;color:#444444;font-size:16px;"><? echo $gI->name ?></div></a>
</div></div>

<? } ?><div class="col s12 m12 l10">
<div id="items"><div class="row"><input type="hidden" name="PageCount" value="0"></div></div>
</div>
</div>
<div id="InventoryContainerPagination" style="margin: 0 auto;text-align:center;"></div>
</div>
</div>
</div>
</div>

</div>

</div>