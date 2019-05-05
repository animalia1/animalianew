<?php

function creationPanier(){
   if (!isset($_SESSION))
      {
    session_start();
      }
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['id'] = array();
      $_SESSION['panier']['nom'] = array();
      $_SESSION['panier']['prix'] = array();
      $_SESSION['panier']['quantity'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}
function ajouterArticle($id,$nom,$prix,$quantity){

   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($id,  $_SESSION['panier']['id']);
     
      if ($positionProduit !== false)
      {  
            $_SESSION['panier']['quantity'][$positionProduit]+= $quantity ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['id'],$id);
         array_push( $_SESSION['panier']['nom'],$nom);
         array_push( $_SESSION['panier']['prix'],$prix);
          array_push( $_SESSION['panier']['quantity'],$quantity);
      }
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}


function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}

function supprimerArticle($id){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['id'] = array();
      $tmp['nom'] = array();
      $tmp['prix'] = array();
      $tmp['quantity'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i=0; $i < count($_SESSION['panier']['id']); $i++)
      {
         if ($_SESSION['panier']['id'][$i] !== $id)
         {
            array_push( $tmp['id'],$_SESSION['panier']['id'][$i]);
            array_push( $tmp['nom'],$_SESSION['panier']['nom'][$i]);
            array_push( $tmp['prix'],$_SESSION['panier']['prix'][$i]);
            array_push( $tmp['quantity'],$_SESSION['panier']['quantity'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] = $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}


function recupererProduitduPannier(){
      
   $ids=array_values($_SESSION['panier']['id']);

  $ids = join("','",$ids);   
  $sql="SELECT * from produit where id IN ('$ids') ";
  $db = config::getConnexion();
  try{
  $req=$db->prepare($sql);
   $req->execute();
  $produit= $req->fetchALL(PDO::FETCH_OBJ);
  //$produit=$req->execute();
  return $produit;
  }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }

}

function modifierQTeArticle($id,$quantity){
   //Si le panier éxiste
   
   if (creationPanier() && !isVerrouille())
   { 
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($quantity > 0)
      {
         $positionProduit = array_search($id,$_SESSION['panier']['id']);
         if ($positionProduit !== false)
         {  
            $_SESSION['panier']['quantity'][$positionProduit] = $quantity ;
         }
      }
      else
      supprimerArticle($id);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}
function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['id']); $i++)
   {
      $total += $_SESSION['panier']['quantity'][$i] * $_SESSION['panier']['prix'][$i];
   }
   return $total;
}

function compterArticles()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['id']);
   else
   return 0;

}



function supprimePanier(){
   unset($_SESSION['panier']);
}


/**
 * 
 */
/*
class panier 
{
   
   function __construct()
   {if (!isset($_SESSION))
      {
         session_start();
      }
     
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['libelleProduit'] = array();
      $_SESSION['panier']['qteProduit'] = array();
      $_SESSION['panier']['prixProduit'] = array();
      $_SESSION['panier']['idProduit'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}

   
   function ajouterArticle($libelleProduit,$qteProduit,$prixProduit,$idProduit){

   //Si le panier existe
   //if (creationPanier() && !isVerrouille())
   //{
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);
     
      if ($positionProduit !== false)
      {  
            $_SESSION['panier']['qteProduit'][$positionProduit]+= $qteProduit ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['libelleProduit'],$libelleProduit);
         array_push( $_SESSION['panier']['qteProduit'],$qteProduit);
         array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
          array_push( $_SESSION['panier']['idProduit'],$idProduit);
      }
  // }
  // else
  // echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}



function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}


}
*/




?>