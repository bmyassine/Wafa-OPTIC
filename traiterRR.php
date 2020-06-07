<?PHP
include "../../../Core/reclamatioC.php";
$reclamatioC=new reclamatioC();
if (isset($_POST["ID_R"])){
    $reclamatioC->traiterD($_POST["ID_R"]);
    header('Location:reclamatioback2.php');
}

?>
