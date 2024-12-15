<?php
require('connexion.php')
$anne=$_POST['anne'];
$saison=$_POST['saison'];
$idstation=$_POST['id'];
$temp=$_POST['temp'];
$pluie=$_POST['pluie'];
$req="select * from mesure where idstation='$idstation' and saison='$saison' and anne='$anne';";
mysqli_query($con,$req);
if (mysqli_affected_rows($con)>0) {echo'mesure déjà enregistré';}
else {
    $req="insert into mesure values('$idstation','$anne','$saison','$temp','$pluie');" ;
    mysqli_query($con,$req);
    if (mysqli_affected_rows($con)>0) {echo"ajout effectué avec succées";};

}
mysqli_close($con);

?>