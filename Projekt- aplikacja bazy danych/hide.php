<?php session_start();
      $db = require_once('db.php');
	  error_reporting(E_ALL ^ E_NOTICE); 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="ajax.js"></script>


	<title>AutoExpres - Rejestracaj</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery.validate.min.js"></script>-->
</head>
<body>
<style type="text/css">
  body {
    padding-top: 50px;
  }
  
</style>



<nav class="navbar  navbar-fixed-top ">



<div class="navbar-header">


</div>
  </div> 

<nav class="navbar navbar-default navbar-fixed-botton">

 
<div class="contener-fluid ">

<div class="navbar-heder .navbar-form  navbar-right" style=" padding-right:20px">

    <div class="contener" >
  
  
  
  
  
  
  
  <?php 
  
  $uzytkownik = $_SESSION['user'];
	


//echo ($uzytkownik);


	
$daneUser = mysql_query("SELECT  id_klient FROM klient WHERE login  IN('$uzytkownik')");



//or die mysql_error;


while($row = mysql_fetch_row($daneUser)){
	
	
  //echo '<tr><td>'. $row[0] .'</td></tr>';
  
	$koll = $row[0];




}

  
 $user = mysql_query(" SELECT imie, nazwisko FROM klient WHERE id_klient IN($koll) ");
  
  while($acosc = mysql_fetch_assoc($user)){
	  
	  echo '<b>'.$acosc['imie'].' '.$acosc['nazwisko'].' '.'</b>';
	  
  }
  
	if ($_SESSION['auth'] == TRUE) {
         
		   ?>
		  <a href="index.php?logout" class="btn btn-default" role="button" onclick="myFunction()" >Wyloguj się</a>
  			
			<script>
				function myFunction(){
					alert("Zostałeś pomyślnie wylogowany");
				}
			</script>
			
			<?php
		  
  }
  else {
         
?>
				<script>
						confirm("Próba nieautoryzowanego dostępu...</strong><br />trwa przenoszenie do formularza logowania</p>");
						location.href = "index.php";
				</script>
			<?php

  }
 
  ?>
  
    

  
</div>
<div>
</div>
</div>
	<img src="obrazy/logo2.png" class="img-responsive" alt="AutoExpres" style="height:30px"  > 

</div>
</div>
</nav>

</div>
</div>
</nav>


<?php




///////////////////////////////////////////////SPRAWDZA CZY TAKI URZYTKOWNIK JEST KLIENT ZAGRANICZNY LUB KLIENT FIRMOWY///////////////////////////////////////////////

//echo $_SESSION['user'];
$uzytkownik = $_SESSION['user'];
	
	echo ('<br></br>');

//echo ($uzytkownik);

echo ('<br></br>');
	
$daneUser = mysql_query("SELECT  id_klient FROM klient WHERE login  IN('$uzytkownik')");



//or die mysql_error;


while($row = mysql_fetch_row($daneUser)){
	
	
 // echo '<tr><td>'. $row[0] .'</td></tr>';
 // echo ('<br></br>');
	$koll = $row[0];
//echo ('<br></br>');
//echo ($koll);
//echo ('<br></br>');

}


	
	




  



//////////////////////////////////////////////////////////////////////////////////////////////

/*
$daneKlient = mysql_query( "SELECT * FROM klient WHERE login IN('$koll')");
$rekord = mysql_num_rows($daneKlient);
echo ($rekord);

while($dead = mysql_fetch_assoc($daneKlient)){
	
echo ('<br></br>');

  echo '<tr><td>'.$dead['id_klient'] .'</td> <td>'. $dead['imie'] .'</td> <td>'. $dead['nazwisko'] .'</td> <td>'. $dead['ulica'] .'</td> <td>'. $dead['miasto'] .'</td> </tr>';	

  
  }
*/
	



/*
if ($rekord == 0 ){
	
	
	
*/	
	?>
	
	
	
	<br></br>
	<div class="container-fluid">
	<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
	<div class="contener" style="padding-left:50px">
	
	
	<div class="text">
   <center><h1>Strona Użytkownika</h1></center>
<center><h2>Dane osobowe</h2></center>
<center><h3>Podaj swoje dane osobowe </h2></center>
	
	
<?php
/*
$login = $_POST['login'];
	
	$ggg = mysql_query("SELECT login FROM klient WHERE login = '$login' ");
	
	while($aaa = mysql_fetch_assoc($ggg)){
		
		echo ($aaa);
		
		if(array_search($login,$aaa )){
			
		echo ('istnieje już taki nazwa urzytkownika');
	}
	else{
		
		echo ('Zostałęś poprawnie zarejestrowany');
		
	}
	
	}
	
	*/


if($_POST['RodzKlient'] == NULL){
	
	echo (
	
	
	
'<form role="form" action="" method="POST" autocomplete="no"  name="wyborKlient" onsubmit="return validateForm()">
<h3>Wybierz rodzaj klienta</h3>
				<input type="radio" name="RodzKlient" value="Klient Indywidualny" checked >Klient Indywidualny <br>
				<input type="radio" name="RodzKlient" value="Klient Firmowy">Klient Firmowy<br>
				<input type="radio" name="RodzKlient" value="Klient Zagraniczny">Klient Zagraniczny<br>
				<input type="radio" name="RodzKlient" value="Moje wyporzyczenia ">Moje wyporzyczenia<br>
				<input type="radio" name="RodzKlient" value="Klient Indywidualny" checked >wyporzyczam samochód <br>
<p></p>
			 <input type="submit" class="btn btn-primary" value ="wyślij" /> 
			 <br></br>
			
			</div> 
			</form>

	
	
	
	
	
	');
	
	
}
else {
	
	
	
}
?>
	
	
	






<?php
 
 
 
 
	switch($_POST[RodzKlient] ){
		
		case 'Klient Indywidualny':
		?>
				<!--------------------------------------Klient Indywidualny------------------------------------------------------------>
		<?php
		header( "Location: klintIN.php ");
		 
			break;
		case 'Klient Firmowy':
		
		//////////////////////////////////////Jeśli id_klienta jest w tablicy firma to znaczy że uzupełnił juz dane/////////////////////////////
		
		
///////////////SPRAWDZA CZY ISTNIEJE WPIS O TEGO URZYTKOWNIKA W TABLICY KLIENT FIRMOWY /////////////

$SzukajKlientfirm = mysql_query("SELECT klient_id_klient  FROM firma WHERE klient_id_klient IN($koll)");


			while($czyfirma = mysql_fetch_assoc($SzukajKlientfirm)){
				
				
				$czyklientFirm = $czyfirma['klient_id_klient'];
				
				echo ($czyklientFirm);
				//var_dump($czyfirma);
				
			if($czyklientFirm == $koll ){
				//echo ('zgadza się' );
		
				header( "Location: daneUzyt.php ");
				}
				else{
				//echo ('Nie pasują ' );
				}
				}
		
		
		
			?>
				<!--------------------------------------Klient Firmowy------------------------------------------------------------>
				
				
				
	
	
				<center><h2>Dane Firmowe</h2></center>
				<center><h3>Podaj swoje dane firmy </h2></center>
			
			 
				<form role="form" action="skrypt.php" method="POST" autocomplete="no"  name="Form1" onsubmit="return validateForm()">
					<div class="form-group  input-group-sm form-inline "  >
			
				 <p>
				<label for="id_NIP">NIP</label>
				<input type="text" class="form-control" id="NIP" name="NIP" placeholder="xxxxxxxxxx" name="NIP" required maxlength="15" pattern="[0-9]{10}" title="Podaj 10 cyfrowy NIP" >
				</div>
				 </p> <p>	
					<div class="form-group  input-group-sm form-inline ">
				<label for="id_NazFirmy">Nazwa firmy</label>
				<input type="text" class="form-control" id="NazwaFirmy" placeholder="nazwę firmy" name="NazFirmy" required maxlength="25" pattern="[A-ZĄĘŁŚĆÓŻŹŃ][a-ząęłóśćżźń]{5,23}" title="Podaj poprawną nazwę wg wzorca Xxxxxx" >
			 </div> </p> <p>
			 
			 <div class="form-group  input-group-sm form-inline ">
			 <label for="id_telKOM">Telefon Komórkowy</label>
			 <input type= "text" class="form-control" id="TelKom" placeholder="000-00-000" required name="TelKom" maxlength="10" pattern="([0-9 ]{3}-[0-9]{2}-[0-9]{3})" >
			</div> </p>
			
			
			<br></br>
	 <input type="submit" class="btn btn-primary" value="Wyślij mnie!" role="button"/>
	 </form>
	
</div>
				<?php
				
				
				
				
				
		
		
			break;
		case 'Klient Zagraniczny':
		?>
		<!--------------------------------------Klient Zagraniczny------------------------------------------------------------>
		
  <?php
  
  ///////////////SPRAWDZA CZY ISTNIEJE WPIS O TEGO URZYTKOWNIKA W TABLICY KLIENT ZAGRANICZNY /////////////

	
	///////////////SPRAWDZA CZY ISTNIEJE WPIS O TEGO URZYTKOWNIKA W TABLICY KLIENT ZAGRANICZNY /////////////

$SzukajKlientZag = mysql_query(" SELECT klient_id_klient  FROM klient_zag WHERE klient_id_klient IN($koll)");



 while($jest = mysql_fetch_assoc($SzukajKlientZag)){
	
	echo $jest["klient_id_klient"];
	
	
	$klientZagOK = $jest["klient_id_klient"];
	
	
	
	
	if($klientZagOK == $koll ){
		echo ('zgadza się' );
		
		header( "Location: daneUzyt.php ");
	}
	else{
		echo ('Nie pasują ' );
	}
  }
  ?>
  
  
  
	
	<center><h3>Klient Zagraniczny</h3></center>
	<form role="form" action="skrypt.php" method="POST" autocomplete="no"  name="Form1" onsubmit="return validateForm()">
		<div class="form-group input-group-sm form-inline" >
				<label for="id_NrPoszport">Nr paszportu</label>
				<input type="text" class="form-control " id="NrPaszport" name="Paszport" placeholder="wpisz 8 liczby 0-9 " pattern="[0-9]{8}" title="wpisz 8 liczby 0-9 " required maxlength="8">
				
				<p>
			</div>
			 <div class="form-group input-group-sm form-inline">
				<label for="id_SerPaszport">Numer seri paszportu</label>
				<input type="text" class=".form-control" name="NrSerPoszport" id="NrSeriPaszportu" placeholder=" wpisz 11 cyfr " pattern="[0-9]{11}" required maxlength="11" >
			 </div>
			 </p><p>
			
			 <div class="form-group input-group-sm form-inline">
				<label for="id_obywatel">Obywatelstwo</label>
				
					
				<select   class="form-control"  required name="Obywatelstwo" placeholder="Polska">
					<option value="Australia">Australia</option>
					<option value="Arabia Sałdyjska">Arabia Sałdyjska</option>
					<option value="Białoruś">Białoruś</option>
					<option value="Czechy ">Czechy</option>
					<option value="Chiny">Chiny</option>
					<option value="Francja">Francja</option>
					<option value="Finlandia">Finlandia</option>
					<option value="Indie">Indie</option>
					<option value="Japonia">Japonia</option>
					<option value="Kazachstan">Kazachstan</option>
					<option value="Nowa Zelandia">Nowa Zelandia</option>
					<option value="Niemcy">Niemcy</option>
					<option value="Norwegia">Norwegia</option>
					<option value="Polska" selected>Polska</option>
					<option value="RFN">RFN</option>
					<option value="Singapur">Singapur</option>
					<option value="Szwecja">Szwecja</option>
					<option value="Włochy">Włochy</option>
					<option value="Ukraina">Ukraina</option>
					<option value="UK">UK</option>
					<option value="ZEA">ZEA</option>
					
				</select>
				
			 </div>
			 </p><p>
			 <div class="form-group input-group-sm form-inline">
				<label for="id_krajPoch">Kraj pochodzenia</label>
				
				<select  class="form-control" required  name="KrajPoch" >
					<option value="Australia">Australia</option>
					<option value="Arabia Sałdyjska">Arabia Sałdyjska</option>
					<option value="Białoruś">Białoruś</option>
					<option value="Czechy ">Czechy</option>
					<option value="Chiny">Chiny</option>
					<option value="Francja">Francja</option>
					<option value="Finlandia">Finlandia</option>
					<option value="Indie">Indie</option>
					<option value="Japonia">Japonia</option>
					<option value="Kazachstan">Kazachstan</option>
					<option value="Nowa Zelandia">Nowa Zelandia</option>
					<option value="Niemcy">Niemcy</option>
					<option value="Norwegia">Norwegia</option>
					<option value="Polska" selected>Polska</option>
					<option value="RFN">RFN</option>
					<option value="Singapur">Singapur</option>
					<option value="Szwecja">Szwecja</option>
					<option value="Włochy">Włochy</option>
					<option value="Ukraina">Ukraina</option>
					<option value="UK">UK</option>
					<option value="ZEA">ZEA</option>
					
				</select>
	
			 </div>
			 
			 </p><p>
			 <div class="form-group input-group-sm form-inline">
				<label for="id_plec">Płeć</label>
				
				<select id="plec" required class="form-control" name="plec">
					<option value="Mężczyzna">Mężczyzna</option>
					<option value="Kobieta">Kobieta</option>
				</select>
		</p>
	 <input type="submit" class="btn btn-primary" value="Wyślij mnie!" role="button"/>
	 </form>
	</div>
	 
<!-------------------------------------- MOJE WYPORZYCZENIA ------------------------------------------------------------>
	<?php
	break;
	case  'Moje wyporzyczenia':
	header( "Location: daneUzyt.php ");
	
	
	}
	?>

	
	
	
 <!--------------------------------------Wszystko pozostałe------------------------------------------------------------>
</div>
	<div class="col-sm-4"></div>

	
<?php
/*
	 // TABELA FAKTURY
			 
			 $AktualnaData = date('Y-m-d');
			 
			  $wynikSam = mysql_query ("INSERT INTO faktury (   data_wyst,  wartosc_szkody )
															VALUES 
														( '$AktualnaData', '0')");
				$idFaktury = mysql_insert_id($con);
				//$idFaktury = mysql_insert_id();
			 // echo mysql_errno() . ": " . mysql_error() . "\n";
			 */
?>





<br>
  
 </div>
</div>
</div>
</div>


<br>
<br>
<br>
 <div class="row" >
		<div class="col-sm-12">
  </div>
 <!----------------------------------------------------------------------------------------------------------------->
 
 <div class="row" style="background-color:#E7E7E7 ">
	<div class="col-sm-4">
	<div class="container-fluid">
		<br></br>
		<dl class="dl-horizontal">
		<dt>adres:</dt> <dd>Polska, Katowice 42-200 </dd>
		<dd> ul.Tysiaclecia komuny paryskiej 102/103</dd> 

		<dt><b> email:</b></dt><dd> contact@AutoEx.com <span class= "glyphicon glyphicon-envelope"></span></dd>
		<dt><b> tel.</b> </dt><dd>0700555555 <span class= "glyphicon glyphicon-phone-alt"></span></dd>
		</dl>
		</div>
	</div>
	<div class="col-sm-4" >
		<br></br>
		<center><img src="obrazy/logo2.png"  alt="AutoExpres"  class="img-responsive" style ="width:250px; height:50px"> </center>
	</div>
	
	<div class="col-sm-4">
	<div class="contener-fluid">
		<br></br>
	 <dl class="dl-horizontal">
		<dt>address:</dt> <dd>Poland, Katowice 42-200</dd> 
		 <dd>ul.Tysiaclecia komuny</dd> <dd>paryskiej 102/103 
		<dt><b>e-mail:</b></dt> <dd>contact@AutoEx.com <span class= "glyphicon glyphicon-envelope"></span></dd>
		<b> <dt>tel.</b></dt>  <dd> +48700555555 <span class= "glyphicon glyphicon-phone-alt"></span></dd>
		</dl>
	</div>
	</div>
	
	</div>
	<div class="row" >
		<div class="col-sm-12" style="background-color:333366; color:white;height:30px";>
		
			<center><p><b>Designe by Adam Koziak</b></p></center>
		</div>
	</div>
</div>
 

 
</div>
  </nav>
</body>
</html>