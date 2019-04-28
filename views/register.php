<?PHP
include "../entities/client.php";
include "../core/clientC.php";
if (isset($_REQUEST['username']) and isset($_REQUEST['email']) and isset($_REQUEST['password1']) and  isset($_REQUEST['password2']) and  $_REQUEST['username']!=null and  $_REQUEST['email']!=null   and  $_REQUEST['password1']!=null  and  $_REQUEST['password2']!=null  )
{
    $nom=$_REQUEST['username'];
    $email=$_REQUEST['email'];
    $password1=sha1($_REQUEST['password1']);
    $password2=sha1($_REQUEST['password2']);

    if( $password1==$password2 )

    {
        $client = new clientC();
        $e = new client($nom,$email,$password1);
        $client->ajouterClient($e);
        header('Location: index.php?signup=true');

    }

    else {
        ?>

        <script>


            alert("verifier le mot de passe");


        </script>
        <?php

    }

}


else{ echo "vérifier les champs"; }

//*/
?>