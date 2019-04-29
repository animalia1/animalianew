<?PHP
class favorisC {

    public static function ajouterFavoris($userid,$productid){
            $i=0;
            $sql= "SELECT * From favoris WHERE userid=$userid AND productid =$productid";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            foreach($liste as $fav){
                $i++;
            }
            if($i == 0){
               
                $sql="INSERT INTO favoris (userid, productid) VALUES ($userid,$productid)";
                $db = config::getConnexion();
                try{
                $req=$db->prepare($sql);
                
                    $req->execute();
                   
                }
                catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
                }


                //augmenter le nombre de favoris de produit
                $sql="UPDATE produit SET nfavoris = nfavoris + 1 WHERE id=$productid";
		
                $db = config::getConnexion();
                try{		
                $req=$db->prepare($sql);
                
                    $req->execute();
                    
                }
                catch (Exception $e){
                    echo " Erreur ! ".$e->getMessage();
                }
            }
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
            
        
        
    }


    public static function afficherFavoris($userid){


        $sql="SELECT b.nom AS nomproduit, b.price,b.id as productid, a.userid, b.image FROM (SELECT b.id AS userid, a.productid FROM favoris a INNER JOIN client b ON a.userid = b.id) a INNER JOIN produit b ON a.productid = b.id where userid =$userid";
		$db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
		}



        function afficherProduitFavoris(){
            //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
            $sql="SElECT * From produit ORDER BY nfavoris DESC LIMIT 4";
            $db = config::getConnexion();
            try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
            }
    public static function supprimerFavoris($user,$product){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="DELETE FROM favoris where userid= $user AND productid =$product";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        }

		
}
