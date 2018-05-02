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
  
</div>
<div>
	<a href= "daneUzyt.php"><img src="obrazy/logo2.png"  alt="AutoExpres" style="height:30px"> </a>
</div>
</div>
</div>
</div>
</nav>
</div>
</div>
</nav>


<div class="contener">
<?php

$klient = mysql_query("SELECT * FROM klient WHERE id_klient IN($koll)  ");

 

while($ddd = mysql_fetch_assoc($klient)){
	 
	$imie = $ddd[imie];
	 $naz = $ddd[nazwisko];
	$uli= $ddd[ulica];
	$miasto = $ddd[miasto];
	$tel = $ddd[nr_tel];
	$Nkonto = $ddd[nr_konta_bank];
	$kpoczt = $ddd[kod_pocztowy];
	$pesel = $ddd[PESEL];
}
 
 $firma = mysql_query("SELECT * FROM firma WHERE klient_id_klient IN($koll) ");
 while($ccc = mysql_fetch_assoc($firma)){
 
	$nip =$ccc[NIP];
	$nazfirm = $ccc[nazwa_firma];
	$tkom =$ccc[tel_kom];
 
 
 }
 
 
 $klientZag = mysql_query("SELECT * FROM klient_zag WHERE klient_id_klient IN($koll)  ");
 while($aaa = mysql_fetch_assoc($klientZag)){
 
	$NSP =$aaa[nr_serii_paszport];
	$Obywatel =$aaa[obywatelstwo];
	$kpoch = $aaa[kraj_pochodzenia];
	$plec =$aaa[plec];
 
 }

 //var_dump($klientZag);
?>






<div class="cantener-fluid">

<div class="row">
<div class="col-sm-4" style=" padding:20px" >

<div class="well" >
<center><h3>Dane Osobowe<h3></center>
 <p>imie: <?=$imie ?></p>
 <p>Nazwisko: <?=$naz ?></p>
 <p>Ulice: <?=$uli ?></p>
 <p>Miasto: <?=$miasto ?></p>
 <p>Numer telefon: <?=$tel ?></p>
 <p>Numer Konta: <?=$Nkonto ?></p>
 <p>Kod pocztowy: <?=$kpoczt ?></p>
 <p>PESEL: <?=$pesel?></p>
 </div>
	
	 


</div>
<div class="col-sm-4" style="  padding:20px" >



<div class="well"  >
<?php
	if($nip == !NULL){
?>
			<center><h3>Dane Firmowe<h3></center>
		<p>NIP: <?=$nip?></p>
		<p>Nazwa firmy: <?=$nazfirm ?></p>
		<p>Telefon Firmowy: <?=$tkom?></p>
		<br>
<br>
	<?php
	}
	else{
		?>
		

		
<br>
<br>
<br><center><img src="obrazy/logo2.png" class="img-responsive" alt="AutoExpres"   > </center>
<br>
<br>
<br>

<?php
		
	}
?>
	
		
	</div>
			<a href="klintIN.php" type="button"  class=" btn btn-primary btn-block"    value="Klient" >wyporzycz samochód</a>

	</div>
	
<div class="col-sm-4" style=" padding:20px">

	<div class="well" >
	<?php
	if($NSP == !NULL){
		?>
	<center><h3>Dane Klienta Zagranicznego<h3></center>
	
	<p>	Numer seri paszportu:<?php echo ($NSP); ?></p>
	<p>Obywatelstwo:<?php echo ($Obywatel); ?></p>
	<p>Kraj pochodzenia: <?php echo ($kpoch); ?></p>
	<p>Płeć:<?php echo ( $plec); ?></p>
	<?php
	}
	else{
		?>
		<br>
<br>

<br>
		<div >
			<h4><i><p>"Czy wiesz że AutoExpress jest firma</p> 
			<p>	doceniającą swoich klientów i dbających o</p><p>	 jak najwiekszą satyskwację klienta.</p><p> 	To nie przypadek że  tak dużo osób</p><p> nas wybrało." <i><h4>
		</p></div>
<br>
<br>
<br>
<br>



<?php
	
	}
	?>
	</div>
</div>
</div>
	
</div>

<div class="contener-fluid" style=" padding:20px" >
<div class="well" >
<?php

echo("<center><h2>Ostatnie wypożyczenie<h2></center>
		 <table class='table table-striped'>
		<thead>
			<tr>
			<tr><th> Marka samochodu: </th><th> Model samochodu: </th><th> Data wyporzyczenia: </th><th> Data zwrotu: </th><th>Wartosc brutto (zł) </th><th><br>
		</thead></tr>");

	$result = mysql_query("SELECT klient.id_klient, klient.imie, klient.nazwisko, wypozyczenia.data_od, wypozyczenia.data_wpl, wypozyczenia.Samochod_id_samochod, samochod.id_samochod, samochod.Marka_sam, samochod.Model_sam, wypozyczenia.wartosc_brutto, EXTRACT(
DAY FROM wypozyczenia.data_od ) AS Dzien, EXTRACT(
MONTH FROM wypozyczenia.data_od ) AS miesiac, EXTRACT( Year
FROM wypozyczenia.data_od ) AS rok, DATE_FORMAT( `data_od` , GET_FORMAT( DATE, 'EUR' ) ) AS aaa, DATE_FORMAT( `data_wpl` , GET_FORMAT( DATE, 'EUR' ) ) AS bbb
FROM klient, wypozyczenia, samochod
WHERE klient.id_klient = wypozyczenia.klient_id_klient
AND wypozyczenia.Samochod_id_samochod = samochod.id_samochod
AND ( klient.id_klient = '$koll') ORDER BY miesiac, Dzien, rok");

while($abc = mysql_fetch_assoc($result)){
	
		echo '<tbody><tr><td>'. $abc[Marka_sam] .'</td><td>' . $abc[Model_sam] .'</td><td>'. $abc[bbb] .'</td><td>'. $abc[aaa] .'</td><td>'. $abc[wartosc_brutto]. ' zł</td></tr></tbody>' ;
		
		$kloumny = mysql_num_rows($result); 
		
			
				
	}

		
			


	?>

</table>
<?php
if($kloumny == 0){
	echo "<center><h3>Brak wyporzyczeń<h3></center>";
	}
?>
<br></br>
</div>

</div>	

	



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<!---------------------------------------------------------------------->

 <div class="row" >
		<div class="col-sm-12">
  </div>
 
 <div class="row" style="background-color: #E7E7E7">
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
		 <dd>ul.Tysiaclecia komuny paryskiej 102/103</dd> 
		<dt><b>e-mail:</b></dt> <dd>contact@AutoEx.com <span class= "glyphicon glyphicon-envelope"></span></dd>
		<b> <dt>tel.</b></dt>  <dd> +48700555555 <span class= "glyphicon glyphicon-phone-alt"></span></dd>
		</dl>
	</div>
	</div>
	
	</div>
	<div class="row" >
		<div class="col-sm-12" style="background-color:#333366; color:white;height:30px";>
		
			<center><p><b>Designe by Adam Koziak</b></p></center>
		</div>
	</div>
</div>
 

 
</div>
  </nav>
</body>
</html>