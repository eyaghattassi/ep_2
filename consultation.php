<?php
require('connexion.php');
$idstation=$_POST['id'];
$temp=
$req="select anne,saison,temperature,pluie from mesure where idstation='$idstation';";
$res=mysqli_query($con,$req);
echo ""

?>