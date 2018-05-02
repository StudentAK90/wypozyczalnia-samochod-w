<?php

 session_start('ddd');

 $db = require_once('db.php');


?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="ajax.js"></script>


	<title>AutoExpres - Rejestracaj</title>
	 <meta charset="utf-8">
 
  <script type="text/javascript" src="jquery.validate.min.js"></script>
</head>
	<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="jquery.validate.min.js"></script>
	
	
	
 <script type="text/javascript">
	$(document).ready(function() {
		$("#formularz").validate({
			messages: {
				imie: {
					required: 'Pole wymagane',
					minlength: 'Wpisz conajmniej {0} znaki',
				},
				nazwisko: {
					required: 'Pole wymagane',
					email: 'Wpisz poprawny adres email',
				},
				url: {
					url: 'Wpisz poprawny adres URL',
				},
				comment: {
					required: 'Pole wymagane',
				},
			}
		});
	});
	</script>
 
 
 
 
 
 
 
 
 
 
	<style type="text/css">
		em, .error {
			color: red;
		}
	</style>
	
	
</head>
<body>	

<?php


/*
echo $_SESSION['user'];
$uzytkownik = $_SESSION['user'];
	
	echo ('<br></br>');

echo ($uzytkownik);

echo ('<br></br>');
	
$daneUser = mysql_query("SELECT id_user  FROM user WHERE login  IN('$uzytkownik')");


//or die mysql_error;

while($row = mysql_fetch_row($daneUser)){
	
	
  echo '<tr><td>'. $row[0] .'</td></tr>';
  echo ('<br></br>');
	$koll = $row[0];
echo ('<br></br>');

}
*/
$result = mysql_query( "Select klient.id_klient, klient.imie, klient.nazwisko, wypozyczenia.klient_id_klient, wypozyczenia.data_od, wypozyczenia.data_wpl, wypozyczenia.Samochod_id_samochod, samochod.id_samochod, samochod.Marka_sam, samochod.Model_sam  FROM klient
Inner join wypozyczenia 
on klient.id_klient = wypozyczenia.klient_id_klient
Inner join samochod
on wypozyczenie.Samochod_id_samochod = samochod.id_samochod  ");

//$rekord = mysql_num_rows($daneKlient);

while ($row = mysql_fetch_assoc($result)) {
//while ($dead = mysql_fetch_assoc($daneKlient)){
	
echo ('<br></br>');

  echo '<tr><td>'.$row['id_klient'].'</td> <td>'.$row['imie'].'</td> <td>'.$row['klient_id_klient'].'</td> <td>'.$row['data_od'].'</td> <td>'.$row['data_wpl'].'</td> <td>'.$row['Samochod_id_samochod'].'</td> <td>'.$row['id_samochod'].'</td> <td>'.$row['Marka_sam'].'</td> <td>'.$row['Model_sam'].'</td> </tr>';	

  mysql_free_result($result);
  
  }

	




//if ($rekord == 0 ){
	
	?>
	<div class="text">
   <center><h1>Strona Użytkownika</h1></center>
<center><h2>Dane osobowe</h2></center>
<center><h3>Podaj swoje dane osobowe </h2></center>
	
	
	<form role="form" action="skrypt.php" method="POST" autocomplete="no"  name="Form1" id="formularz" onsubmit="return sprawdz(this)">
			<div class="form-grup">
	
	
	<div class="form-grup">
				<label for="id_imie">Podaj imię</label><em>*</em>
				<input type="text" class="form-control " id="imie" name="imie"  placeholder="imię np. JAN" required   maxlength="15" pattern="[A-ZĄĘŁŚĆÓŻŹŃ][a-ząęłóśćżźń]{2,15}" >
				
				<br></br>
				
			</div>
			 <div class="form-group">
				<label for="id_nazwisko">Nazwisko</label><em>*</em>
				<input type="text" class="form-control" id="nazwisko" placeholder="nazwisko np. KOWALSKI" name="nazwisko" required maxlength="20" pattern="[A-ZĄĘŁŚĆÓŻŹ][a-ząęłóŚśĆćżŻźŹ][^!<>=+@#$%*_]{1,15}" >
			 </div>
			 <br></br>
			 <div class="form-group">
			 <h3>Podaj adres zamieszkania</h3>
			 <br></br>
				<label for="indemtyfikator_inputu"> Ulice </label><em>*</em>
				<input type="text" class="form-control" id="ulica" placeholder="podaj ulice na której mieszkasz" name="ulica" required maxlength="35" pattern="[A-ZĄĘŁŚĆÓŻŹŃ][a-ząęłóśćżźń][^!<>=+@#$%*_]{1,15}" >
			 </div>
			 <br></br>
			 <div class="form-group">
				<label for="id_miasto">Miasto</label><em>*</em>
				<input type="text" class="form-control" id="miasto" placeholder="miasto np. Sosnowiec" name="miasto" required maxlength="30" pattern="[A-ZĄĘŁŚĆÓŻŹŃ][a-ząęłóśćżźń][^!<>=+@#$%*_]{1,15}" >
			 </div>
			 <br></br>
			 <div class="form-group">
				<label for="id_numTel">Numer telefon</label><em>*</em>
				<input type="tel" class="form-control" id="telefon" name="numerTel" placeholder="w formacie 000-00-000"  required pattern="[0-9]{3}-[0-9]{2}-[0-9 ^!<>=+@#$%*_]{3}" title="Podaj w formie XXX-XX-XXX" maxlength="10">
			 </div>
	 <br></br>
			 <div class="form-group">
			 <label for="id_NumKonta" >Numer Konta</label><em>*</em>
			 <input type="text" class="form-control" id="NumerKonto" name="NumerKonto" placeholder="xxxxxxxxx"  pattern="[0-9]{10}"  required maxlength="10">
			 <br></br>
			 
			 <div class="form-group">
				<label for="id_kodpoczta">Kod pocztowy</label><em>*</em>
				<input type="text" class="form-control" id="kodPocztowy" name="KodPoczta" placeholder="w formie 00-000" pattern="[0-9]{2}-[0-9 ^!<>=+@#$%*_]{3}" title="Podaj w formie XX-XXX" required maxlength="6" >
			 </div>
			 <br></br>
			 <div class="form-group">
				<label for="id_pesel">PESEL</label><em>*</em>
				<input type="text" class="form-control" id="PPESEL" name="PESEL" requred pattern="[0-9]{11}" title="Podaj 11 cyfrowy numer PESEL" required maxlength="11">
			 </div>
			 <br></br>
			 <input type="submit" class="btn btn-primary" value ="wyślij" /> 
	<?php
//}
 //else{
	 echo ('<br></br>');
	 
	 print('już kiedyś sie logowałeś tutaj');
	 
	 ?>
	 
	 
	 <?php
	 
 //}
//}
//else{
	
	

//print('dffdf');
  
 
  
	
//}
	/*	$sql = mysql_num_rows(mysql_query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'"));
		
			// jeżeli powyższe zapytanie zwraca 1, to znaczy, że dane zostały wpisane poprawnie i rejestruję sesję
			if ($sql == 1) {
              
			
                // zmienne sesysje user (z loginem zalogowanego użytkownika) oraz sesja autoryzacyjna ustawiona na TRUE
				
                
				
                // przekierwuję użytkownika na stronę z ukrytymi informacjami
				
					
					
					
					
			
				//echo '<p style="padding-top:10px";><strong>Proszę czekać...</strong><br />trwa logowanie i wczytywanie danych</p>';
			 }
			
			
         		
            
            // jeżeli zapytanie nie zwróci 1, to wyświetlam komunikat o błędzie podczas logowania
			else {
		
				echo '<p style="padding-top:10px;color:red";><br />';
				echo '<a href="index.php">Wróć do formularza</a></p>'; 
			}
			}
*/
?>
</body>
</html>