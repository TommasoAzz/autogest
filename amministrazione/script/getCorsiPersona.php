<?php
require_once "../../connettiAlDB.php";
require_once "../../caricaClassi.php";
include_once "../../getInfo.php";
require_once "../../funzioni.php";
Session::open();
$info=Session::get("info");
$db=Session::get("db");
$utente=Session::get("utente");

if(GlobalVar::getServer("REQUEST_METHOD")==="POST") {
    $ID_Persona=GlobalVar::getPost("ID");

    $q="SELECT C.Nome AS nc, S.Giorno AS g, S.Ora AS o, C.Durata AS d, C.Aula AS a, I.ID_SessioneCorso AS id_sc FROM SessioniCorsi S INNER JOIN Corsi C ON C.ID_Corso=S.ID_Corso INNER JOIN Iscrizioni I ON S.ID_SessioneCorso=I.ID_SessioneCorso WHERE ID_Studente=$ID_Persona ORDER BY Giorno,Ora";
    $superArray=$db->qikQuery($q);
    $jsonData=json_encode($superArray);
    echo $jsonData;
} else {
    header("Location: ../");
}
?>
