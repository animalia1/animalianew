<?PHP
include "../../config.php";
include "../../core/reactionC.php";
$reactC=new reactionC();
if (isset($_POST["id"])){
	$reactC->supprimerreaction($_POST["id"]);
	header('Location: reaction.php');
}

?>