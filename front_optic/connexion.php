<?php include_once 'entities/compte.php';
include_once 'core/compteC.php';
include_once 'config.php';
$conn = config::getConnexion();
$user=new compte($_POST['id'],$_POST['motdepasse']);
$gestion_compte=new compteC();
$liste=$gestion_compte->Logedin($user);
//verification id/mot de passe
$vide=false;
if(!empty($_POST['id'])&&!empty($_POST['motdepasse'])){
	foreach ($liste as $champs_de_compte) {
		$vide=true;
		if($champs_de_compte['id']==$_POST['id'] && $champs_de_compte['motdepasse']==$_POST['motdepasse']){
			session_start();
			$_SESSION['id']=$_POST['id'];
			$_SESSION['motdepasse']=$_POST['motdepasse'];
			$_SESSION['type']=$champs_de_compte['type'];//admin ou client 
			if($_SESSION['type']=='admin'){
           //header("location: ../../views/back/production/affichercompte.php"); 
			}
			else if($_SESSION['type']=='sav'){
				//header("location: /fourat/Fourat/views/back/production/reclamatioback2.php"); 
			}
			else{
				//type client 
				header("location:index.php");
			}

		}


	}
	if($vide==false){
		//id ou mot de passe incorrect
		echo '<script>
        alert("id ou mot de passe incorrect");
  window.location.assign("login-register.php")
		</script>';
	}

}else {
	 echo '<script>alert("Les variables du formulaire ne sont pas déclarées.Vous devez remplir le formulaire");
  window.location.assign("login-register.php");

	 </script>'; 
}
?>