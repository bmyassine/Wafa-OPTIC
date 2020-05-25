<?php
session_start ();
/*session_unset ();
session_destroy ();*/
unset($_SESSION['id']);
unset($_SESSION['motdepasse']);
unset($_SESSION['type']);
			
			
header ('location: login-register.php');
?>