<?PHP

  class couponC {

    
    public static  function ajoutcoupon($coupon){
      $sql="insert into coupon(code,promotion,nb_user)
      values(:code,:promotion,:nb_user)";
      $db=config::getConnexion();
      $query=$db->prepare($sql);
      $query->bindValue(':code', $coupon->getCode());
      $query->bindValue(':promotion', $coupon->getPromotion());
      $query->bindValue(':nb_user', $coupon->getNb_user());
      $query->execute();


  }
  


  public static function affichecoupon(){
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
  
  public static function supprimercoupon($code){
		
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


  

}
  ?>