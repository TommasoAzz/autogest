<?php
require_once "../classes.php";
    if(GlobalVar::getServer("REQUEST_METHOD")==="POST") {
        Session::open();
        require_once "../connectToDB.php";
        $db=Session::get("db");
        $nome=GlobalVar::getPost("nome");
        $cognome=GlobalVar::getPost("cognome");
        $q="SELECT ID_Persona FROM Persone WHERE Nome LIKE '".$nome."' AND Cognome LIKE '".$cognome."'";
        $res=$db->qikQuery($q); //ritornato un array
        
        $jsonData=json_encode($res);
        echo $jsonData;
    } else {
        header("Location: /");
    }
?>