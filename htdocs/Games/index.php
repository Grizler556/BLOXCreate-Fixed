<?php include"../header.php"; 

	if(!isset($_GET['page'])) {
	$page = 1;
	} else {
  $page = $_GET['page'];
	}
  $limit = 20;
  $offset = ($page - 1) * $limit;
  $games = $handler->prepare("SELECT * FROM games ORDER BY id ASC LIMIT :limit OFFSET :offset");
  $games->bindParam(':limit', $limit, PDO::PARAM_INT);
  $games->bindParam(':offset', $offset, PDO::PARAM_INT);
  $games->execute();
  $game = $games->fetchAll();
?>
</center>
<div class="col s12 m9 l8">
<div class="container" style="width:100%;">
<div style="height:25px;"></div>
<div class="header-text">Games</div><div style="height:10px;"></div>
<div class="content-box">
<div class="row">
<?php foreach($game as $gT){ ?>
<div class="col s12 m12 l2">
<a href="/Games/Place?id=<?php echo $gT['id']; ?>"><img src="<?php echo $gT['image']; ?>" style="display:block;height:125px;width:125px;"></a>
<a href="/Games/Place?id=<?php echo $gT['id']; ?>"><div style="padding-top:3px;color:#444444;font-size:16px;"><? echo htmlspecialchars($gT['title']); ?></div></a>
<div style="font-size:14px;color:#666666;">Created By: <a href="../Profile/?id=-1"><? echo $gT['owner']; ?></a></div>
</div>
<? } ?>
</div>
</div>
</div>
</div>