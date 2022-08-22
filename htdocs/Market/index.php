<?php $name = 'Market'; ?>

<?php include "../header.php";
$pageadd = 1;

?>
<?php
	if(!isset($_GET['page'])) {
	$page = 1;
	} else {
  $page = $_GET['page'];
	}
  $limit = 20;
  $offset = ($page - 1) * $limit;
  $items = $handler->prepare("SELECT * FROM items ORDER BY id ASC LIMIT :limit OFFSET :offset");
  $items->bindParam(':limit', $limit, PDO::PARAM_INT);
  $items->bindParam(':offset', $offset, PDO::PARAM_INT);
  $items->execute();
  $item = $items->fetchAll();
?>
<div class="container" style="width:100%;">
<div class="row">
</div>
<div id="search-market" style="display:none;">
<div class="header-text">Search Results</div>
<div style="height:10px;"></div>
<div class="content-box">
<div class="row">
<div class="search-waiting" id="search-waiting">
<i class="material-icons" style="font-size:75px;margin-top:15px;">access_time</i>
<div>Fetching results...</div>
</div>
<div id="search-results"></div>
</div>
</div>
</div>
<div id="parent-market">
<div class="header-text">Items</div>
<div style="height:10px;"></div>
<div class="content-box">
<div class="row" style="margin-bottom:0;">

<?php foreach($item as $gI){ ?>
<div class="col s12 m2 l2" style="position:relative;">
<a href="/Market/Items?id=<?php echo $gI['id']; ?>"><img src="<?php echo $gI['image']?>" class="responsive-market-img item-view item-view-padding"></a>
<a href="/Market/Items?id=<?php echo $gI['id']; ?>"><div class="item-name"><?php echo htmlspecialchars($gI['name']); ?></div></a>
<div class="item-creator">
Created By: <a href="#"><?php echo $gI['creator']; ?>
</div>
<div class="item-creator">
Price: <?php echo $gI['price']; ?>
</div>
</div>
<? } ?>
</div>
<center>
<a href="/Market/index.php?page=<?php echo htmlspecialchars($page-$pageadd); ?>" class="modal-trigger waves-effect waves-light btn grey darken-2">Previous Page</a>
<a href="/Market/index.php?page=<?php echo htmlspecialchars($page+$pageadd); ?>" class="modal-trigger waves-effect waves-light btn grey darken-2">Next Page</a>
</center>
</div>
<?php include "../footer.php"; ?>