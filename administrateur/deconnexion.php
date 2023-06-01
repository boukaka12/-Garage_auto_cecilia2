<?php
session_start();

if(isset($_SESSION['nom_admin'])){
session_destroy();
header('location:../index.php');

}else{
echo "pas deconnecter";
header('location: admin-acceuil.php');
}

?>