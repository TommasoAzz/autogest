<?php
require_once "../../caricaClassi.php";
require_once "../../connettiAlDB.php";

if(GlobalVar::SERVER("REQUEST_METHOD")==="POST") {
    $aA=GlobalVar::POST("aA");

    $query="UPDATE AltreAttivita SET Lista='".$aA."' WHERE ID=1";
    $modificaEff=$db->queryDB($query);

    if($modificaEff) {
        echo "modifica-effettuata";
    } else {
        echo "modifica-non-effettuata";
    }

} else {
    header("Location: ../");
}
?>