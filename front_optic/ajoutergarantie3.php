<?PHP

include "entities/garantie.php";
include "core/garantieC.php";



if (isset($_POST['date'])  and isset($_POST['subject']) and ( strtotime ($_POST['date']) < strtotime('now') ) and isset($_POST['userid']) ){
    $date= date_create()->format('Y-m-d');
    
    $garantie1=new garantie($date,$_POST['date'],$_POST['subject'],"en attente",$_POST['userid']);
    $garantie1C=new garantieC();
    $garantie1C->ajoutergarantie($garantie1);


  
    //var_dump($rupture);

    header('Location:my-account.php');

}else{
echo "verfier la date";

}


?>
