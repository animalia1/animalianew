<?PHP
include "categoryC.php";
class produitC {
	
        function ajoutProduit($produit){

           
                $sql="insert into produit(nom,price,description,image,category,type_animaux)
                values(:nom,:price,:description,:image,:category,:type_animaux)";
                $db=config::getConnexion();
                $query=$db->prepare($sql);
                $query->bindValue(':nom', $produit->getNom());
                $query->bindValue(':price', $produit->getPrice());
                $query->bindValue(':description', $produit->getDescription());
                $query->bindValue(':image', "images/".$produit->getImage());
                $query->bindValue(':category', $produit->getCategory());
                $query->bindValue(':type_animaux', $produit->getTypeanimaux());
                $query->execute();
        
		
        }	
        function afficherProduit(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        }
        
        function afficherNouveauProduit(){
            //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
            $sql="SElECT * From produit ORDER BY date DESC LIMIT 4";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
            }


        function afficherProduitc($id){
            //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
            $sql="SElECT * From produit where id='$id'";
            $db = config::getConnexion();
            try{
                $liste=$db->query($sql);
                foreach($liste as $produit){
                    return $produit;
                }
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
         function supprimerProduit($id){
		
            $sql="DELETE FROM produit where id= :id";
            $db = config::getConnexion();
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            try{
                $req->execute();
               // header('Location: index.php');
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }


        function modifierProduit($produit,$id){
            $sql="UPDATE produit set nom=:nom,price=:price,image=:image,category=:category,type_animaux=:type_animaux, description=:description where id='$id'";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->bindValue(':nom', $produit->getNom());
            $query->bindValue(':price', $produit->getPrice());
            $query->bindValue(':description', $produit->getDescription());
            $query->bindValue(':image', "images/".$produit->getImage());
            $query->bindValue(':category', $produit->getCategory());
            $query->bindValue(':type_animaux', $produit->getTypeanimaux());
            $query->execute();
    
    
    }
    function afficherProduitFo($cat,$type){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit where category='$cat' and type_animaux='$type'";
		$db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        }	

        function afficherProduitSearch($cat,$type,$search){
            //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
            $sql="SElECT * From produit where category='$cat' and type_animaux='$type' and nom LIKE '%$search%'";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
            }	
            function afficherProduitPrice($cat,$type,$min,$max){
                //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
                $sql="SElECT * From produit where category='$cat' and type_animaux='$type' and price BETWEEN $min AND $max";
                $db = config::getConnexion();
                try{
                $liste=$db->query($sql);
                return $liste;
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }	
                }	
                function compterArticles()
                {
                   if (isset($_SESSION['panier']))
                   return count($_SESSION['panier']['id']);
                   else
                   return 0;
                
                }
                
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
                         function recupererProduit($id){
                            $sql="SELECT * from produit where id=$id";
                            $db = config::getConnexion();
                            try{
                            $req=$db->prepare($sql);
                             $req->execute();
                            $produit= $req->fetchALL(PDO::FETCH_OBJ);
                            return $produit;
                            }
                              catch (Exception $e){
                                  die('Erreur: '.$e->getMessage());
                              }
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
            
    }
    
     
?>