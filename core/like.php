<?php
include '../config.php';
$db = config::getConnexion();
	session_start();
	$a=$_SESSION['id'];

	$id_produit=$_POST['id_produit'];


	$result = $db->query("SELECT * FROM `avis` WHERE `id_prod`=$id_produit and `id_user`=$a");
	$count=$result->rowCount();

	if ($count == 0 ){
		$INSERT="INSERT INTO `avis` (`id_prod`, `id_user`) VALUES ($id_produit,$a);";
		$db->exec($INSERT);
	}  

	

if(isset($_POST['likeBTN'])  )
{	
	$sql ="UPDATE `avis` SET `etat` = 1  WHERE `avis`.`id_prod` = '$id_produit' AND `avis`.`id_user` = '$a' ";
	$db->exec($sql);


	$url= "../views/shop-detail.php?id=".$_REQUEST["id"];
	header("Location:  $url");
}

else if(isset($_POST['dislikeBTN'])  )
{	
	$sql ="UPDATE `avis` SET `etat` = 0 WHERE `avis`.`id_prod` = '$id_produit' AND `avis`.`id_user` = '$a' ";
	$db->exec($sql);


    
$url= "../views/shop-detail.php?id=".$_REQUEST["id"];
header("Location:  $url");
}



?>