<?PHP
include "../../config.php";
include "../../core/CommC.php";
$commC=new CommC();
if (isset($_POST["login"])){
	$commC->supprimerComm($_POST["login"]);
	header('Location: commentaire.php');
}

?>