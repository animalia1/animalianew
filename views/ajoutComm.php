<?PHP
include "../config.php";
include "../entities/Comm.php";
include "../core/CommC.php";

if (isset($_POST['name']) and isset($_POST['comment']) ){
$comm1=new comm($_POST['name'],$_POST['login'],$_POST['comment']);
$comm1C=new CommC();
$comm1C->ajouterComm($comm1);
$url= "shop-detail.php?id=".$_REQUEST["id"];
header("Location:  $url");
	
}else{
	echo "vérifier les champs";
}
//*/

?>