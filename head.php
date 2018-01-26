<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name='language' content='IT' />
<meta name='author' content='Tommaso Azzalin, azzalintommaso@gmail.com' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<?php
	$info=Session::get("info");

	$pageName=substr($_SERVER["SCRIPT_NAME"],1);
	$pageName=substr($pageName,0,strrpos($pageName,"/"));
	$pageName=($pageName == "") ? "home" : $pageName;
	switch($pageName) {
		case "home":
			$pageName = "Home";
			break;
		case "tutti-i-corsi":
			$pageName = "Tutti i corsi";
			break;
		case "licenza":
			$pageName = "Licenza";
			break;
		case "iscrizione":
			$pageName = "Iscrizione";
			break;
		case "i-miei-corsi":
			$pageName = "I miei corsi";
			break;
		case "gestione-corso":
			$pageName = "Gestione corso";
			break;
		case "autogest":
			$pageName = "Auto.Gest";
			break;
		case "amministrazione":
			$pageName = "Amministrazione";
			break;
		default:
			$pageName = "Auto.Gest";
			break;
	}
	echo "<title>".$pageName." - ".$info["titolo"]."</title>";
?>
<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/css/jquery-confirm.min.css" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery-confirm.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>