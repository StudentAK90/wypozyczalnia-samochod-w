<?php
session_start();
require_once('db.php');
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
 
 
 
 
 
 
 
  /////////////////////////////////////////////////////KONIEC SESJA I URZYTKOWNIK////////////////////////////////////////////////////////////////////////

 
 
 
$od = $_POST['bdaymonth1'];
$do = $_POST['bdaymonth2'];
$samochod = $_POST['marka'];

/*echo ($od);
echo ('<br>');
echo ($do);
echo ('<br>');

echo ($samochod);
echo ('<br>');
echo ('<br>');*/
$dataOdOk = explode( "/",$od );
$dataDoOk = explode( "/",$do );



// echo "$dataOdOk[0], $dataOdOk[1], $dataOdOk[2]";
 // echo "$dataDoOk[0], $dataDoOk[1], $dataDoOk[2]";
  
  $miesiac1 = $dataOdOk[0];
  $dzien1 = $dataOdOk[1];
  $rok1 = $dataOdOk[2];
  
   $miesiac2 = $dataDoOk[0];
  $dzien2 = $dataDoOk[1];
  $rok2 = $dataDoOk[2];
 // echo ('<br>');
  
 $dateOdzam = ($rok1.'-'.$miesiac1.'-'.$dzien1);
    //echo ('<br>');
 $dateDozam = ($rok2.'-'.$miesiac2.'-'.$dzien2);
/*  
echo "to jest data od $dateOdzam  ale data do wynosi $dateDozam ";
  echo ('<br>');
  echo ($dateOdzam);
  echo ('<br>');
  echo ($dateDozam);
 echo ('<br>');
 echo ('<br>');*/
$aaa = explode(" ",$samochod );
/*
echo "$aaa[0],<br>
 $aaa[1],<br>
 $aaa[2],<br>
 $aaa[3],<br>
 $aaa[4]";*/
$idSam = $aaa[0];
$marka =  $aaa[1];
$model =  $aaa[2];

/*
 echo "o to marka samochodu: $idSam <br>" ;
 echo "o to marka samochodu: $marka <br>" ;
  echo "o to model samochodu: $model <br>" ;
 
*/


$SQL = mysql_query('SELECT wypozyczenia.data_wpl, wypozyczenia.data_od, wypozyczenia.Samochod_id_samochod, samochod.id_samochod, samochod.Marka_sam, samochod.Model_sam
FROM wypozyczenia, samochod
WHERE wypozyczenia.Samochod_id_samochod = samochod.id_samochod
AND wypozyczenia.data_wpl
BETWEEN "$dateOdzam"
AND "$dateDozam"
OR wypozyczenia.data_od
BETWEEN "$dateOdzam"
AND "$dateDozam"
AND samochod.Marka_sam
IN (
"$marka"
)
AND samochod.Model_sam
IN (
"$model"
)');






 ?>
 <table>
 <?php
 
 
while($abc= mysql_fetch_assoc($SQL))
{
	
	
echo '<tbody><tr><td>'. $abc[data_wpl] .'</td> <td>' . $abc[data_od] .'</td> <td>'. $abc[Samochod_id_samochod] .'</td> <td>'. $abc[Marka_sam] .'</td> <td>'. $abc[Model_sam].'</td><td>'. $abc[Model_sam].'</td><td>'. $abc[wartosc_brutto]. ' zł</td></tr></tbody>' ;
	
	
	
}
?>
</table>
<?php
$wiersze = mysql_num_rows($SQL) ;

	//var_dump($wiersze);

if ($wiersze == !0){
	
	?>
		<script>
			
			alert("Dla tej rezerwacji ten samochód został już zarezerwowany przez kogoś innego. Zmień samochód lub wybież inny termin. ");
			location.href = "klintIN.php";
		</script>
	<?php
	//header('Location:klintIN.php');

}
else{
	
	/////////////////////////////////WYSTAWIENIE FAKTURY////////////////////////////////////////////////
			
		
			 
			  $wynikSam = mysql_query ("INSERT INTO faktury (   data_wyst,  wartosc_szkody )
															VALUES 
														( '$dateOdzam', '0')");
				$idFaktury = mysql_insert_id();
			 //var_dump($idFaktury);
				
			  //echo mysql_errno() . ": " . mysql_error() . "\n";
	
		//////////////////////////////////Obliczanie ceny wyporzyczenia////////////////////////////////////////////////

		$bleble2 =(strtotime($dateOdzam ) - strtotime($dateDozam));
		$bleble = round( $bleble2 /86400);

		$ddd = abs($bleble);
		//echo '<br> ile dni wyporzycza:';
		//echo ($ddd );
		//echo '<br>';
	$cena = mysql_query("SELECT cena FROM samochod WHERE id_samochod = '$idSam' ");
 //echo mysql_errno() . ": " . mysql_error() . "\n";
While($row = mysql_fetch_assoc($cena)){
	
	//echo '<td><tr>'.$row['cena'].'</tr></td>';
	
	//echo $row['cena'];
}

 
 
$cena = mysql_query("SELECT cena FROM samochod WHERE id_samochod = '$idSam' ");
 //echo mysql_errno() . ": " . mysql_error() . "\n";
While($row = mysql_fetch_assoc($cena)){
	
	//echo '<td><tr>'.$row['cena'].'</tr></td>';
	
	$CenaZaDzien = $row['cena'];
	//echo ($OstatCena) ;
	$OstatCena = $CenaZaDzien  * $ddd;
 
}
 ?>
 
 <?php
	
	
		//////////////////////////////////ZAPISYWANIE DO BAZY////////////////////////////////////////////////
			
			
			 $wynikSam = mysql_query ("INSERT INTO wypozyczenia (  data_wpl, data_od, wartosc_brutto,  klient_id_klient, pracownik_id_pracownik, faktury_id_faktury, Samochod_id_samochod )
															VALUES 
														( ' $dateOdzam ', '$dateDozam', '$OstatCena', '$koll', '1', '$idFaktury ', '$idSam' )");
														
														
		//////////////////////////////////KONIEC ZAPISYWANIE DO BAZY////////////////////////////////////////////////			 

		?>	
			<script>
			
			alert("Pomyślnie zarejestrowano twoją rezerwację");
			location.href = "daneUzyt.php";
		</script>
	<?php
	
}

?>

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