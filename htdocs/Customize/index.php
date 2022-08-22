<? include "../header.php"; if ($user){
$items = $handler->query("SELECT * FROM inventory WHERE user='".$myu->id."'"); ?>
<div class="entire-page-wrapper">


<div style="padding-top:100px;"></div>
<div class="col s12 m9 l8">
<div class="container" style="width:100%;">

<div id="data-response"></div>
<div class="row" style="margin-bottom:0;">
<div class="col s12 l4">
<div class="header-text" style="font-size:18px;padding-bottom:5px;">Avatar</div>
<div class="content-box center-align">
<iframe src="http://bloxcreatefixed.rf.gd/avatar.php?id=<?php echo $myu->id ?>" style="width:200px;height:200px;border:0px;" scrolling="no"></iframe>
</div>
<div style="height:15px;"></div>
<div class="header-text" style="font-size:18px;padding-bottom:5px;">Avatar</div>
<div class="content-box center-align">
<div style="background:#FFD800;width:35px;height:35px;margin:0 auto;cursor:pointer;" onclick="showPalette('head')" id="head"></div>
<div style="height:5px;"></div>
<div style="background:#FFD800;width:35px;height:75px;margin:0 auto;cursor:pointer;display:inline-block;" onclick="showPalette('leftarm')" id="leftarm"></div>
<div style="background:#007F0E;width:75px;height:75px;margin:0 auto;cursor:pointer;display:inline-block;" onclick="showPalette('torso')" id="torso"></div>
<div style="background:#FFD800;width:35px;height:75px;margin:0 auto;cursor:pointer;display:inline-block;" onclick="showPalette('rightarm')" id="rightarm"></div>
<div style="clear:both;display:block;"></div>
<div style="margin-top:-3px;">
<div style="background:#000E63;width:35px;height:75px;margin:0 auto;display:inline-block;" onclick="showPalette('leftleg')" id="leftleg"></div>
<div style="background:#000E63;width:35px;height:75px;margin:0 auto;display:inline-block;" onclick="showPalette('rightleg')" id="rightleg"></div>
</div>
</div>
</div>
<div class="col s12 l8">
<div class="header-text" style="font-size:18px;padding-bottom:5px;">Inventory</div>
<div class="content-box">
<div style="text-align:center;color:#999;font-size:14px;">
</div>
<div style="height:15px;"></div>
<div class="center-align">
</div>

<div style="height:15px;"></div>
<div id="inventory-box"><div class="row" style="margin-bottom:0;">

<? while($gN = $items->fetch(PDO::FETCH_OBJ)){ 
$inventory = $handler->query("SELECT * FROM items WHERE id='".$gN->item."'");
$gI = $inventory->fetch(PDO::FETCH_OBJ)
?>

<div class="col s3 center-align" style="padding:15px;">
<div style="position:relative;">
<img src="<?echo "$gI->image"; ?>" style="display:block;margin:0 auto;width:108.047px;height:108.047px;">
<a href="#" target="_blank"><div style="padding-top:10px;font-size:12px;"><?echo "$gI->name"; ?></div></a>
<div style="position:absolute;top:0;right:-5px;">
<a class="wear" href="../Market/Items/render.php?id=<?echo "$gI->id"; ?>">Wear</a>
<a class="remove" href="../Market/Items/remove.php?id=<?echo "$gI->id"; ?>">Remove</a>
</div>
</div>
</div>

<? } ?>

</div></div>

</div>
</div>
</div>
</div>
</div>

</div>
<? } ?>