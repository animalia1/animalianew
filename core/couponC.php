<?PHP

  class couponC {

    
    function ajoutcoupon($coupon){
      $sql="insert into coupon(code,promotion,nb_user)
      values(:code,:promotion,:nb_user)";
      $db=config::getConnexion();
      $query=$db->prepare($sql);
      $query->bindValue(':code', $coupon->getCode());
      $query->bindValue(':promotion', $coupon->getPromotion());
      $query->bindValue(':nb_user', $coupon->getNb_user());
      $query->execute();


  }

   function affichecoupon(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * FROM coupon";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
  }
  
  public static function supprimercoupon($idc){
		
		$sql="DELETE FROM coupon where couponid= :idc";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idc',$idc);
		try{
			$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


  public static function modifcoupon($nb){
		$sql="UPDATE coupon SET nb_user=:nb";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		
		$req->bindValue(':nb',$nb);
		
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