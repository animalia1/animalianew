<?php
include '../../entities/commande.php';
include '../../core/commandeC.php';
include '../../core/produitC.php';
include '../../core/classpanier.php';



function Nombrecoupon($code){
    //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
    $sql="SELECT nb_user as nb FROM coupon where code='$code' ";
    $db = config::getConnexion();
    
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
  }

  function modifiercoupon($code,$nb_user){
    $sql="update coupon SET nb_user=:nb_user where code=:code";
    $db=config::getConnexion();
    $nb_user=$nb_user-1;
    $query=$db->prepare($sql);
    $query->bindValue(':nb_user',$nb_user);
    $query->bindValue(':code', $code);
    $query->execute();


}
 function supprimercoupon($code){
		
    $sql="DELETE FROM coupon where code = :code";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':code',$code);
    try{
        $req->execute();
       // header('Location: index.php');
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

function afficheCoupon($code){
    //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
    $sql="SELECT promotion FROM coupon where code='$code'";
    $db = config::getConnexion();
    try{
    $coupons=$db->query($sql);
        foreach($coupons as $coupon){
            return $coupon[0];

        }
    
    }
    
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
}


if(isset($_REQUEST['id']) and isset($_REQUEST['quantity'])   and isset($_REQUEST['price'])){
/*
    $p=new commande($_REQUEST['id'],$_REQUEST['price'],$_REQUEST['quantity']);
   //2-instance
   $pcore=new commandeC();
   $mb=$pcore->recherche($_REQUEST['id']);
   foreach ($mb as $value) {
       # code...
       $nombre=$value['mb'];
       $qt=$value['quantity'];
   }
   if($nombre==0)
   $pcore->ajoutCommande($p);
   else{
    $pcore->modifierquantity($qt,$_REQUEST['quantity'],$_REQUEST['id']);
   }
   */
   //

   $panier=creationPanier();
   $id=$_REQUEST['id'];
   $p=new produitC();
   $result=$p->recupererProduit($id);
   foreach($result as $produit) {
             $id= $produit->id; 
             echo "id:".$id;
               $nom=$produit->nom;
               echo "nom:".$nom;

               $prix=$produit->price;
               echo "price:".$prix;

                $quantite=$_REQUEST['quantity'];

             } 
   ajouterArticle($id,$nom,$prix,$quantite);
  // var_dump($_SESSION);
   header ('Location: ../shop-detail.php?id='.$_REQUEST['id']);

}else if(isset($_REQUEST['supid'])){
    //2-instance
    //$pcore=new commandeC();
   // $pcore->supprimerCommande($_REQUEST['supid']);
  // $id=$_GET['id'];
supprimerArticle($_REQUEST['supid']);
    header ('Location: ../cart.php');

}else if(isset($_REQUEST['modid'] )and isset($_REQUEST['quantity'] ) )  {
    echo "modiiiiiiiiiiiiiiiiiiisddd";
    echo "qte:".$_REQUEST['quantity'];
    //2-instance
   // $pcore=new commandeC();
   // $pcore->modifCommande($_REQUEST['quantity']);
   modifierQTeArticle($_REQUEST['modid'],$_REQUEST['quantity']);
   header ('Location: ../cart.php');

}else if(isset($_REQUEST['coupon'])){
    //2-instance
    $coupon = afficheCoupon($_REQUEST['coupon']);
     $liste=Nombrecoupon($_REQUEST['coupon']);
foreach ($liste as $value)
{
$nb= $value['nb'];
}
echo $nb;
if ($nb==0)
supprimercoupon($_REQUEST['coupon']);

else
modifiercoupon($_REQUEST['coupon'],$nb);


    $url = '../cart.php?coupon='.$coupon;
    header ("Location: $url");

}

?>