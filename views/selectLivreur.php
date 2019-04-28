<?php


function selectlivreur(){
    $sql="SELECT * From livreur  ORDER BY dispo ASC LIMIT 1";
    $db = config::getConnexion();
    try
    {
        $liste = $db->query($sql);
             
    $x= $liste->fetch();
    return $x;
    }
    catch (Exception $e)
    {
        die('Erreur: '.$e->getMessage());
    }
}
function calcul($dispo){
    //max des livraisons d'un livreur 1 jour
    $max = 4;
    if(($dispo / $max) < 1){
        $message = "temps estime : un jour";
    }else if(($dispo / $max) < 2){
        
        $message = "temps estime : 2 jours";
    }else if(($dispo / $max) < 3){
        
        $message = "temps estime : 3 jours";
    }else{
        $message = "error";
    }
    return $message;
}

 function incLivreur($id,$dispo){
    $sql="UPDATE livreur SET dispo=($dispo +1) WHERE id='$id'";
    
    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
    $req=$db->prepare($sql);
    
        $req->execute();
        
    }
    catch (Exception $e){
        header('Location: index.php');
        echo " Erreur ! ".$e->getMessage();
    }}
?>