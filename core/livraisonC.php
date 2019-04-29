
<?PHP

class LivraisonC {
	public static function ajouterLivraison($livraison,$clientid){
        
		
        $nom=$livraison->getNom();
        $prenom=$livraison->getPrenom();
        $adresse=$livraison->getAdresse();
        $numero=$livraison->getNumero();
        $prix=$livraison->getPrix();
        $orderid=$livraison->getOrderid();
        $date=$livraison->getDate();
        $etat=$livraison->getEtat();
        $zipcode=$livraison->getZipcode();
        $livreur=$livraison->getLivreur();
        $sql="INSERT INTO livraison (order_id_fk, etat, date, id_livreur, prix_livraison, adresse, numero, zip, nom, prenom, id_client) VALUES (:order_id_fk, :etat, :date, :id_livreur, :prix_livraison, :adresse, :numero, :zip, :nom, :prenom, :clientid)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$req->bindValue(':order_id_fk',$orderid);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':date',$date);
		$req->bindValue(':id_livreur',$livreur);
		$req->bindValue(':zip',$zipcode);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':prix_livraison',$prix);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':clientid',$clientid);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	


	public static function confirmerLivraison($id){
		$sql="UPDATE livraison SET etat='confirmer' WHERE id='$id'";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
            $req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
	}


	public static function envoyerMsg($id){
		$sql="UPDATE client SET message='1' WHERE id='$id'";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
            $req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
	}

	public static function envoyerMsgAdmin($id,$msg){

		$sql="INSERT into feedback (id_client,msg) VALUES ('$id','$msg')";		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
            $req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
	}

	public static function afficherLivraison(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT a.nom as nomlivreur, e.nom, e.prenom, e.adresse, e.numero, e.order_id_fk, e.etat, e.id, e.zip, e.date From livraison e inner join animalia.livreur a on e.id_livreur= a.id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	public static function afficherLivreurc($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From livreur where id='$id'";
		$db = config::getConnexion();
		try{
			$liste=$db->query($sql);
			foreach($liste as $liv){
				return $liv;
			}
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	public static function afficherFeedback(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From feedback e inner join animalia.client a on e.id_client= a.id";
		$db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
		}

		public static function supprimerFeed($id){
			//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
			$sql="DELETE FROM feedback where id_feed= $id";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
			}
		

	public static function supprimerLivraison($id){
		
		$sql="DELETE FROM livraison where id= :id";
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
	public static function modifierLivreur($livreur,$id){
		$sql="UPDATE livreur SET nom=:nom, adresse=:adresse, codePostale=:codePostale, email=:email, numero=:numero,dateR=:dateR, salary=:salary WHERE id='$id'";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom=$livreur->getNom();
        $adresse=$livreur->getAdresse();
        $salaire=$livreur->getSalaire();
        $date=$livreur->getDate();
        $codePostale=$livreur->getCodePostale();
        $numero=$livreur->getNumero();
        $email=$livreur->getEmail();
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':email',$email);
		$req->bindValue(':dateR',$date);
		$req->bindValue(':codePostale',$codePostale);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':salary',$salaire);
		
            $req->execute();
			
        }
        catch (Exception $e){
			header('Location: index.php');
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
        }
		
	}

}

?>