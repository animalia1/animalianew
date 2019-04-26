<?PHP
class favorisC {

    public static function ajouterFavoris($userid,$productid){


        $sql="INSERT INTO favoris (userid, productid) VALUES ($userid,$productid)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }

		
}
