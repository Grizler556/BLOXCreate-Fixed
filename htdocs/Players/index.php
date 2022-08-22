<?php 
$name = 'Users'; 
$addpage = 1;
?>
<? include"../header.php"; ?>
<?php
	if(!isset($_GET['page'])) {
	$page = 1;
	} else {
  $page = $_GET['page'];
	}
  $limit = 20;
  $offset = ($page - 1) * $limit;
  $users = $handler->prepare("SELECT * FROM users ORDER BY id ASC LIMIT :limit OFFSET :offset");
  $users->bindParam(':limit', $limit, PDO::PARAM_INT);
  $users->bindParam(':offset', $offset, PDO::PARAM_INT);
  $users->execute();
  $usar = $users->fetchAll();
?>

<div class="col s12 m9 l8">
<div class="container" style="width:100%;">
<div class="content-box">
<table>
<tbody>
<tr>
<td width="80%">
<div class="header-text">Search Users</div>
</td>
<td width="20%" class="right-align">

</td>
</tr>
</tbody>
</table>
<div style="height:15px;"></div>
<?php foreach($usar as $uP){ ?>
<center>
<a href="/Profile/index.php?id=<?php echo $uP['id'];?>"><?php echo $uP['username']; ?></a>
<br>
</center>
<? } ?>
		</div>
</div>
</div>

</div>

</div></div>

</div>
<br>
<center>
<a href="/Players/index.php?page=<?php echo htmlspecialchars($page-$addpage); ?>" class="modal-trigger waves-effect waves-light btn grey darken-2">Previous Page</a>
<a href="/Players/index.php?page=<?php echo htmlspecialchars($page+$addpage); ?>" class="modal-trigger waves-effect waves-light btn grey darken-2">Next Page</a>
</center>



</body></html>
<? include "../footer.php"; ?>