<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
// require_once('db.php');

		$con = mysql_connect("mysql1.ugu.pl","db683956","qwerty11") or
        die('Nie można się połączyć');
		
		mysql_select_db('db683956');
		mysql_query("SET CHARACTER SET UTF8");
?>
<html>


  
 
<head>
	<title>AutoExpres - Rejestracaj</title>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
  body {
    padding-top: 50px;
  }
</style>


<nav class="navbar  navbar-fixed-top ">



<div class="navbar-header">

<p></p>

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

  
   //////////////////////////////////////SESJA/////////////////////////////////////////
   ?>
 


  </div>

    
</div>
  
</div>

</div>

</div>

</div>
<a href="daneUzyt.php"> <img src="obrazy/logo2.png"  alt="AutoExpres" style="height:30px"/> </a>
</nav>

</div>
</div>
</nav>
  
  
  
<div class="conterner-fluid">



<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">




<br></br>
			
			
			
</center>
			
			
		<?php
		
		
$serch = $_POST['car'];
echo ($serch);
		
?>		
		<?php	

	 // funkcja obliczajaca roznice dat 
function roznica_data($data_poczatek, $date_koniec, $jednostka_czasu="sekund" ) 
{ 

 $tablica = array(minut=>60, godzin=>3600, dni=>86400, sekund=>1);
 //return "Roznica miedzy data: <b> ".$data_poczatek."</b> a data <b>".$date_koniec."</b> wynosi ".round(((strtotime($date_koniec) - strtotime($data_poczatek)) / $tablica[$jednostka_czasu]))." ".$jednostka_czasu ; 
}


$od = $_POST['bdaymonth1'];
$do = $_POST['bdaymonth2'];
$dni = dni;

$wynik = roznica_data("$od", "$do", "$dni");
//echo ($wynik) ."<br />";
$bleble2 =(strtotime($od) - strtotime($do));
$bleble = round( $bleble2 /86400);

$ddd = abs($bleble);
//$fff = 350 * $ddd;
?>
	</div>
</div>
 <?php
 

	//TABELA KLIENT
	
		
	/*	
	if(preg_match('@^[A-Z][a-z]\{3, 15}$@') , $_POST['imie']))
	{
		
		$OK=1;
		
			
		if(preg_match('@[A-Z][a-z][^!<>=+@#$%*_-]{3,15}@'),$_POST[nazwisko] ))
		{
			$OK++
				
				 if(preg_match('@[A-Z][a-z][^!<>=+@#$%*_]{1,15}@'),$_POST[ulica] ))
					{
		
						$OK++
							
								 if(preg_match('@[A-Z][a-z][^!<>=+@#$%*_]{1,15}@'), $_POST[miasto]))
									{
		
										$OK++
												
												if(preg_match('@^[0-9]{3}-[0-9]{2}-[0-9]{3}[^!<>=+@#$%*_]$@'),$_POST[numerTel]) )
													{
		
														$OK++
														
															if(preg_match('@[0-9]{10}[^!<>=+@#$%*_]@'),$_POST[NumerKonto]) )
															{
		
																$OK++
																	 if(preg_match('^@[0-9]{2}-[0-9]{3}[^!<>=+@#$%*_]$@'),$_POST[NumerKonto] ))
																	{
		
																		$OK++
																			 if(preg_match('@^[0-9]{11}[^!<>=+@#$%*_]$@'),$_POST[PESEL]) )
																			{
		
																				$OK++
																			}
																			else{
		 
																			echo 'błąd_8 - złe dane';
																			}
																	}
																	else{
		 
																			echo 'błąd_7 - złe dane';
		 
																	}
		
															}
															else{
		 
																echo 'błąd_6 - złe dane';
		 
															}		
														
													}
													else{
		 
														echo 'błąd_5 - złe dane';
		 
														}
						
									}
									else{
		 
										echo 'błąd_4 - złe dane';
		 
									}
							
					}
					else{
		 
						echo 'błąd_3 - złe dane';
		 
					}
				
		}
		else{
		 
			echo 'błąd_2 - złe dane';
		 
		}
			
	}
     else{
		 
		 echo ('błąd_1 - złe dane');
		 
	 }

	 */
	
	
	
	
	
	
	
	
	
	
	   ////////////////////////TABELA KLIENT ///////////////////////

	
	$datapocztowa = preg_match('@(\d+)\D+(\d+)@' , $_POST['KodPoczta'], $dataNOK );
	
		
		$dataOK = $dataNOK[1].=$dataNOK[2];
		 //print_r($dataOK);
		
		require_once('db.php');
	
	$login = $_POST['RejNaz'];
	
	$baza = mysql_query("SELECT login FROM klient WHERE login = '$login'");
	
	//echo ($baza);
	
	$kk = mysql_num_rows($baza);
	
	if($kk == !0){
		
	
	/*
	while($aaa = mysql_fetch_assoc($baza)){
		
		$fff = (in_array($login,$aaa));
		//echo ($fff);
		
		echo ($aaa['login']);
	}
	*/	
		

		//if($fff == 1 ){
			
		
		
		?>
				<script>
						alert("istnieje już taka nazwa użytkownika");
						location.href = "Rejestracja.php";
				</script>
				
			<?php
			
			
		
	}
	else{
		
	
	if ($baza = 1){
		
		?>
				<script>
						alert("Pomyślnie zarejestrowano cię w bazie danych ... trwa przełączanie na stronę główną");
						location.href = "index.php";
				</script>
			<?php
			 $wynik = mysql_query (" INSERT INTO klient ( id_klient ,imie, nazwisko, ulica, miasto, kod_pocztowy, nr_tel, nr_konta_bank, PESEL, Nrdom,  password, email, login)
						VALUES 
				(NULL,'$_POST[imie]','$_POST[nazwisko]','$_POST[ulica]','$_POST[miasto]','$dataOK','$_POST[numerTel]','$_POST[NumerKonto]','$_POST[PESEL]', '$_POST[Nrdom]',  '$_POST[haslo]', '$_POST[email]', '$_POST[RejNaz]')");
		
	
	
	}	
		else
		{
			?>
				<script>
						alert("Błąd Rejestracji, wprowadź nowy login lub hasło");
						location.href = "Rejestracja.php";
				</script>
			<?php
			
		}
	
	
		
	}
	  
		
		
		
		/*
		
		 $wynik = mysql_query (" INSERT INTO klient ( id_klient ,imie, nazwisko, ulica, miasto, kod_pocztowy, nr_tel, nr_konta_bank, PESEL, Nrdom, RodzKlient, password, email, login)
						VALUES 
				(NULL,'$_POST[imie]','$_POST[nazwisko]','$_POST[ulica]','$_POST[miasto]','$dataOK','$_POST[numerTel]','$_POST[NumerKonto]','$_POST[PESEL]', '$_POST[Nrdom]', '$_POST[RodzKlient]', '$_POST[haslo]', '$_POST[email]', '$_POST[RejNaz]')");
		
		*/
		
		

  
  
 
	  //$KodPoczta = mysql_escape_string( $_POST['KodPoczta']);
	  /*
	  
	  if (strcmp($_POST[imie],NULL )){
		//print('zmienna OK Marka' );
			if (strcmp($_POST[nazwisko],NULL )){
			//print('zmienna OK Marka' );
				if (strcmp($_POST[ulica],NULL )){
					//print('zmienna OK Marka' );
						if (strcmp($_POST[miasto],NULL )){
							//print('zmienna OK Marka' );
								if (strcmp($_POST[numerTel],NULL )){
									//print('zmienna OK Marka' );
										if (strcmp($_POST[NumerKonto],NULL )){
											//print('zmienna OK Marka' );
												if (strcmp($_POST[KodPoczta],NULL )){
													//print('zmienna OK Marka' );
														if (strcmp($_POST[PESEL],NULL )){
															//print('zmienna OK Marka' );
																if (strcmp($_POST[Nrdom],NULL )){
																	if (strcmp($_POST[RodzKlient],NULL )){
																
  $wynik = mysql_query (" INSERT INTO klient ( id_klient ,imie, nazwisko, ulica, miasto, kod_pocztowy, nr_tel, nr_konta_bank, PESEL, Nrdom, RodzKlient)
						VALUES 
				(NULL,'$_POST[imie]','$_POST[nazwisko]','$_POST[ulica]','$_POST[miasto]','$dataOK','$_POST[numerTel]','$_POST[NumerKonto]','$_POST[PESEL]', '$_POST[Nrdom]', '$_POST[RodzKlient]')");
		
		*/
		//$wynik = mysql_query(" Update klient set  imie = '$_POST[imie]', nazwisko= '$_POST[nazwisko]', ulica= '$_POST[ulica]' , miasto= '$_POST[miasto]' , kod_pocztowy = '$dataOK', nr_tel = '$_POST[numerTel]' , nr_konta_bank = '$_POST[NumerKonto], PESEL = '$_POST[PESEL]', Nrdom ='$_POST[Nrdom]', RodzKlient = '$_POST[RodzKlient]' WHERE id_klient = $Daneklient_id  ");		
					
		
					
	  //$WypSam_id = mysql_insert_id($con);
	 // echo "indyfikator klienta id";
		// print_r($WypSam_id);
  
	 
  
echo mysql_errno() . ": " . mysql_error() . "\n";
	/*
																
	}
	else{
		
	}
	}
	else{
		
	}
	}
	else{
	
	}
	}
	else{
	
	}
				
			
	}
	else{
	
	}
	}
	else{
	
	}
	}
	else{
	
	}
	}
	else{
	
	}
				
			
	}
	else{
	
	}
	}
	else{
	
	}

	  	*/
	  
	
 

//echo('error');
	//print_r($dataOK);
	
	
	///////////////////// TABELA FIRMA //////////////////////////
	
	
		
	if (strcmp($_POST[NIP],NULL )){
		//print('zmienna OK Marka' );
			if (strcmp($_POST[NazFirmy],NULL )){
			//print('zmienna OK Marka' );
					if (strcmp($_POST[TelKom],NULL )){
						//print('zmienna OK Marka' );
					
		$wynikFirma = mysql_query ("INSERT INTO firma ( NIP, nazwa_firma, tel_kom, klient_id_klient )
			VALUES 
			('$_POST[NIP]','$_POST[NazFirmy]','$_POST[TelKom]','$koll')");
			
//echo mysql_errno() . ": " . mysql_error() . "\n";
		
			 
			
						
	}
	else{
		
	}
			
	}
	else{
		
	}
	}
	else{
		
	}
		
		


		
	 //////////////////////////////////TABELA KLIENT_ZAG //	 /////////////////////////
			 
			 
			 
			 
			 
			 
			 
			 
			 
	 $Firma_id = mysql_insert_id($con);
		// print_r($Firma_id);
		
		 
		/* 
		if(($_POST['plec'])== Mężczyzna){
			
			$plec = 'M';
			
		}
		else{
			$plec = 'K';
		}
		*/	
	
	
	if (strcmp($_POST[Paszport],NULL )){
				//print('zmienna OK Marka' );
					if (strcmp($_POST[NrSerPoszport],NULL )){
						//print('zmienna OK Marka' );
							if (strcmp($_POST[Obywatelstwo],NULL )){
								//print('zmienna OK Marka' );
									if (strcmp($_POST[KrajPoch],NULL )){
										//print('zmienna OK Marka' );
											if (strcmp($_POST[plec],NULL )){
												//print('zmienna OK Marka' );
												
													
	$wyniKlietZag = mysql_query ("INSERT INTO klient_zag ( nr_paszport, nr_serii_paszport, obywatelstwo, kraj_pochodzenia, plec, klient_id_klient )
													VALUES 
														('$_POST[Paszport]', '$_POST[NrSerPoszport]', '$_POST[Obywatelstwo]', '$_POST[KrajPoch]',  '$_POST[plec]','$koll')");
	
			// echo mysql_errno() . ": " . mysql_error() . "\n";
			 //$TWyp_id = mysql_insert_id($con);	
			 
			header(location: daneUser.php );
			 
			 	 /////////////////// TABELA FAKTURY/////////////////////////////////////
			 /*
			 
			 $AktualnaData = date('Y-m-d');
			 
			  $wynikSam = mysql_query ("INSERT INTO faktury (   data_wyst,  wartosc_szkody )
															VALUES 
														( '$AktualnaData', '0')");
				$idFaktury = mysql_insert_id($con);
			  echo mysql_errno() . ": " . mysql_error() . "\n";
					 
				*/	
	}		
	else
	{
		
	}
	}		
	else
	{
		
	}
	}				
	else
	{
		
	}
	}		
	else
	{
		
	}
	}		
	else
	{
		
	}
	
	
	
	 
		
	
				
					  //TABELA WYPORZYCZENIA //
			
			//print_r($TWyp_id);
					 
					 

 $marka = $_POST['marka'];
 $sam = preg_match('@(\d+)(\D+)@',$marka , $idsam);
$idsamok = $idsam[1];
$samgood =$idsam[2];
					 
					 
					
					 $wynikSam = mysql_query ("INSERT INTO wypozyczenia ( id_wyporzyczenia, data_wpl, data_od, wartosc_brutto,  klient_id_klient, pracownik_id_pracownik, faktury_id_faktury, Samochod_id_samochod )
															VALUES 
														( NULL , '$_POST[bdaymonth1]', '$_POST[bdaymonth2]', '$koll', '$WypSam_id', '1', '$idFaktury ', '$idsamok' )");
					 
					  $id = mysql_insert_id($con);
	/*				 
	$wynikSam = mysql_query ("INSERT INTO wypozyczenia ( data_wpl, data_od,   klient_id_klient, pracownik_id_pracownik, faktury_id_faktura )
															VALUES 
														'$_POST[bdaymonth1]','$_POST[bdaymonth2]','WypSam_id','1','1')");
														*/
	
		 //echo mysql_errno() . ": " . mysql_error() . "\n";
	
	 ?>
	
	 <?php
	 
	  // echo ' $WypSam_id,';
	   
				//TABELA SAMOCHÓD//
	
		//$wynik = mysql_query ("INSERT INTO 	

 

//echo ($marka);

//echo ($idsamok);

 //$model = $_POST['model'];
 ?>
 <center>
 <p> <h3>   </h3> </p>
 <p> <h3> 	  </h3> </p>
 

 </center>
 <?php 
 //echo($marka).($model).($fff);	
		
			
		
			
		
 //$zap = mysql_query("INSERT samochod ( id_samochod, id_wyporzyczenia, Data_rejestracji, nr_rejestracyjnego, ubezpieczenie, nr_VIN, Marka_sam, Model_sam, kolor_sam, kaucja, dostepna_ilość) 
//											VALUES
//										( NULL, '$id', '2001-02-03' , 'SO912831', '2009-05-06', '0123456789', '$marka', '$model', 'czerwony', '300', '1')");
	
			 
			 //TABELA WYPOSAŻENIE//
			
 
 
 
 // CENA WYPORZYCZENI SAMOCHODU
 
$cena = mysql_query("SELECT cena FROM samochod WHERE id_samochod = '$idsamok' ");
 echo mysql_errno() . ": " . mysql_error() . "\n";
While($row = mysql_fetch_assoc($cena)){
	
	//echo '<td><tr>'.$row['cena'].'</tr></td>';
	
	//echo $row['cena'];
}

 
 
$cena = mysql_query("SELECT cena FROM samochod WHERE id_samochod = '$idsamok' ");
 echo mysql_errno() . ": " . mysql_error() . "\n";
While($row = mysql_fetch_assoc($cena)){
	
	//echo '<td><tr>'.$row['cena'].'</tr></td>';
	
	$CenaZaDzien = $row['cena'];
	//echo ($OstatCena) ;
	$OstatCena = $CenaZaDzien  * $ddd;
 
}
 ?><center>
 
 </center>
 
 
   
 
 
 <?php 
		

		mysql_close($con); 	
		
			
			 
	?>
	</div>
<div class="col-sm-4"></div>
<script>
	
	confirm("Dziękujemy za złożenie zamówienia ");
						

</script>

<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<div class="row" style="background-color:#993366 ;color:#000000";>
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
		<div class="col-sm-12" style="background-color:black; color:white;height:30px";>
		
			<center><p><b>Designe by Adam Koziak</b></p></center>
		</div>
	</div>
</div>
 

 
</div>

  </nav>
  




</body>

 <?php 
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
						confirm("Próba nieautoryzowanego dostępu...trwa przenoszenie do formularza logowania</p>");
						
				</script>
			<?php
			}
 
  ?>


</html>