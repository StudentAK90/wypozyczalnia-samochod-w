<?php
ob_start();
session_start(); // rozpoczęcie sesji
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
 
<meta name="Description" content="Witryna e-learningowa" />
<meta name="Keywords" content="," />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8; "/>
<meta http-equiv="content-language" content="pl">
<meta name="Distribution" content="Global" />
<meta name="Author" content="grzegorzw" />
<meta name="Robots" content="index,follow" />
<script type="text/javascript" language="JavaScript" src="overlib.js"></script>
<link rel="stylesheet" href="images/style.css" type="text/css" />			
 
<title>logowanie</title>	
<!--<script language="javascript" type="text/javascript">
function popup()
{
popupwindow=window.open('szkolenie/kurs.htm', 'Mójkurs','height=600,width=800,menubar=no,scrollbars=no,resizable=no,status=no,location=no');
popupwindow.moveTo(0,0);
}
</script>-->
</head>
 
<body>
<?php include('db.php'); ?>
<div id="glokno">				
 
			<a name="stronainfo"></a>
<h1>Zaloguj się</h1>
<div class="content">
 
<?php
if (!isset($_SESSION['login'])) { // dostęp dla niezalogowanego użytkownika
 
	if ($_POST['wyslane']) { 
 
		include 'db.php'; 
		$tabela = 'uzytkownik'; 
 
		$login = $_POST["login"];
		$haslo = $_POST["haslo"];
 
		$haslo = md5($haslo); 
 
		// użytkownik się loguje
		$wynik= mysql_query("SELECT wyp4 FROM user WHERE login='$login' and password='$haslo'");
		print_r(mysql_error);
		
 
		if (mysql_num_rows($wynik) == 1) {
 
			$informacja = mysql_fetch_array($wynik);
			$_SESSION["login"] = $informacja["login"];
			header('Location: index.php ');
		} else {
			echo '<p>Zostały wprowadzone nieprawidłowe dane</p>';
		}
		mysql_close($polaczenie);
	}
 
    // tworzenie formularza HTML  
    echo <<< KONIEC
 
    <form class="form" action="logowanie.php" method="post">
    <input type="hidden" name="wyslane" value="TRUE" />
 
    <p>
	  <div class="label"><label for="login">Login</label></div>
	  <input type="text" name="login" id="login" />
	</p>
 
	<p>
	  <div class="label"><label for="haslo">Hasło</label></div>
	  <input type="password" name="haslo" id="haslo" />
	</p>
 
    <p class="submit2">
      <input type="submit" value="Zaloguj mnie" />
    </p>
 
	<p class="przypomnij">
		<a href="przypomnienie.php">Nie pamiętasz hasła?</a>
	</p>
 
    </form>
KONIEC;
 
} else {
    header('Location: index.php'); 
}
 
if ($_GET["wylogowanie"] == "tak") {
    // niszczenie sesji 
    session_unset();
    session_destroy();
    header('Location: index.php'); 
}
 
?>
 
</div>
</div>
