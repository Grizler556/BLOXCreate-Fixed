<? include "../../header.php"; 
$id=$_GET['id'];

if($user){

$noinject = $handler->prepare("DELETE FROM groupmembers WHERE groupid=:id AND userid=$myu->id");
$noinject->bindParam(':id', $id, PDO::PARAM_INT);
$noinject->execute();

}

header('Location: /Groups');

?>