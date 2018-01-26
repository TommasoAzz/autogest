<?php
    require_once "connectToDB.php";
    require_once "classes.php";
    Session::open();
    header("Content-Type: text/html;charset=utf-8");
    $db=Session::get("db");
    $queryInfo="SELECT Titolo,Giorni,MeseAnno,NomeContatto1,NomeContatto2,NomeContatto3,LinkContatto1,LinkContatto2,LinkContatto3 FROM InfoEvento WHERE ID=1";
    $seEseguita=$db->doQuery($queryInfo);
    if($db->checkQuery() && $seEseguita!==false && $db->getAffectedRows()!=0) {
        $info=array(
            "titolo"=>$db->getResult("Titolo"),
            "giorni"=>$db->getResult("Giorni"),
            "meseanno"=>$db->getResult("MeseAnno"),
            "nomecontatto1"=>$db->getResult("NomeContatto1"),
            "linkcontatto1"=>$db->getResult("LinkContatto1"),
            "nomecontatto2"=>$db->getResult("NomeContatto2"),
            "linkcontatto2"=>$db->getResult("LinkContatto2"),
            "nomecontatto3"=>$db->getResult("NomeContatto3"),
            "linkcontatto3"=>$db->getResult("LinkContatto3")
        );
    } else {
        $info=array(
            "titolo"=>"Err. titolo",
            "giorni"=>"Err. giorni",
            "meseanno"=>"Err. mese-anno",
            "nomecontatto1"=>"Err. nomecontatto1",
            "linkcontatto1"=>"Err. linkcontatto1",
            "nomecontatto2"=>"Err. nomecontatto2",
            "linkcontatto2"=>"Err. linkcontatto2",
            "nomecontatto3"=>"Err. nomecontatto3",
            "linkcontatto3"=>"Err. linkcontatto3"
        ); 
    }
    Session::set("info",$info);
?>