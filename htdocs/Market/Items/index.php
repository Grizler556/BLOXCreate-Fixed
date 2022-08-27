<? include"../../header.php"; 
$id = $_GET['id']
$item = $handler->query("SELECT * FROM items WHERE id=:id");
$item->bindParam(':id', $id, PDO::PARAM_INT);
$item->execute();
$gB = $item->fetch(PDO::FETCH_OBJ); ?>

<?php
if ($user) {
?>

<div class="col s12 m9 l8">
<div class="container" style="width:100%;">
<div class="content-box" style="border-radius:0;">
<div class="left-align">
</div>
<div class="row">
<div class="col s12 m6 l3 center-align">
<img src="<? echo "$gB->image"; ?>" class="responsive-img">
</div>
<div class="col s12 m6 l6">
<div style="padding-left:25px;overflow:hidden;">
<div style="font-size:26px;font-weight:300;"><? echo "$gB->name"; ?><b style="text-transform:uppercase;font-size:12px;"><? echo "$gB->type"; ?></b></div>
<div style="color:#777;font-size:14px;"><? echo "$gB->description"; ?></div>
</div>
</div>
<div class="col s12 m3 l3 center-align" style="padding-top:15px;">
<center>
<? if ($gB->onsale == 1){ ?>
<a href="/Market/purchase.php?id=<?echo "$gB->id"; ?>"; class="modal-trigger waves-effect waves-light btn grey darken-2">Buy Item</a>
<? } else { ?>
<a class="modal-trigger waves-effect waves-light btn grey darken-2">Sold Out</a>
<? } ?>
</center>
<div style="height:15px;"></div>
<center><a href="#" style="padding-top:12px;font-size:16px;display:inline-block;"><? echo "$gB->creator"; ?></a></center>
<div style="height:25px;"></div>
<center>
<a href="#" style="display:inline-block;margin-left:15px;"><div class="report-abuse"></div></a>
</center>
</div>
</div>
<div style="padding-top:25px;">
<div class="row" style="margin-bottom:0;">
<div class="col s12 m12 l3 center-align">
<div style="font-size:20px;"><? echo "$gB->created"; ?></div>
<div style="color:#999;font-size:14px;">Time Created</div>
</div>
<div class="col s12 m12 l3 center-align">
<div style="font-size:20px;"><? echo "$gB->created"; ?></div>
<div style="color:#999;font-size:14px;">Last Updated</div>
</div>
</div>
</div>
</div>
</br>
</div>
<?php
} else {
header('Location: /Market');
}
?>

<? include "../../footer.php"; ?>
