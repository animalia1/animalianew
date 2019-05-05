<?php
session_start();

include '../entities/panier.php';
include '../core/panierC.php';
include '../core/commandeC.php';
include '../core/commandeH.php';
include '../entities/commandeH.php';
include_once "../core/classpanier.php";

include '../config.php';
if(empty($_SESSION['username']))
{echo "ouiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii";}
else echo"nonnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn";
$username=$_SESSION['username'];
$prixTotale=MontantGlobal();
$nbArticles=compterArticles();
            
$lignecommande1=new commandeC();
$commande=new commandeH1(date("Y-m-d"),"en cours",$username,$prixTotale);
$commandeH=new commandeH();
$commandeH->ajoutcommandeH($commande);
$idcommande1=$commandeH->recupererDernierCmd();
foreach ($idcommande1 as $value) {
    # code..
    $id=$value['id'];
}
$listeCommandes=$lignecommande1->afficheCommande();
$pcore=new panierC();
/*
    foreach($listeCommandes as $row){  
       // $p=new panier($row['id'],$row['price'],$row['quantity'],$idcommande1);
   $pcore->ajoutpanier($row['id'],$row['price'],$row['quantity'],$id);
echo"id".$row['id']."<br>" ;
echo"price".$row['price']."<br>";
echo"quantity".$row['quantity']."<br>" ;
echo"idcommande1".$id."<br>" ;
}
   $lignecommande1->vider();*/
   for($i=0; $i<$nbArticles;$i++)
   { $quantity=$_SESSION['panier']['quantity'][$i];
     $prix=$_SESSION['panier']['prix'][$i];
     $idproduit=$_SESSION['panier']['id'][$i];
     //$p=new panier($idproduit,$prix,$quantity,$idcommande1);
     $pcore->ajoutpanier($idproduit,$prix,$quantity,$id);
    // $ldcc->ajouterLigneCommande($ldc);
   }

           
 supprimePanier();
 header ('Location: cart.php');



?>