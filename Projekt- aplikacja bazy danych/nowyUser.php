<html>
<head>
	 <meta charset="utf-8">
</head>
<body>
<?php

	require_once('db.php');
	
	////////////////////////////////////////////////////////////////////////
	

	
	
	
	
	//////////////////////////////////////////////////////////////////////
	/*
	

	$baza  = mysql_query (" INSERT INTO klient ( id_klient ,imie, nazwisko, ulica, miasto, kod_pocztowy, nr_tel, nr_konta_bank, PESEL, Nrdom, RodzKlient,  password, email, login )
						VALUES 
					(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL , NULL, '$_POST[haslo]', '$_POST[email]', '$_POST[RejNaz]'  )");
					echo mysql_error();
	
	$Daneklient_id = mysql_insert_id();
	echo ($Daneklient_id );
	
			$wynik = mysql_query("Update klient set  imie = kkkkkk' WHERE id_klient = $Daneklient_id ");
			//imie = '$_POST[imie]', nazwisko= '$_POST[nazwisko]', ulica= '$_POST[ulica]' , miasto= '$_POST[miasto]' , kod_pocztowy = '$dataOK', nr_tel = '$_POST[numerTel]' , nr_konta_bank = '$_POST[NumerKonto], PESEL = '$_POST[PESEL]', Nrdom ='$_POST[Nrdom]', RodzKlient = '$_POST[RodzKlient] WHERE id_klient = $Daneklient_id ' ");		

	
	
$baza = mysql_query ("INSERT INTO klient( password, email, login ) 
								VALUES
							( '$_POST[haslo]', '$_POST[email]', '$_POST[RejNaz]' )");
							
							
							
							
							
							
	//(login, password, email) 
	//('$_POST[RejNaz]','$_POST[haslo]','$_POST[email]')");
	if ($baza=1){
		
		?>
				<script>
						//alert("Pomyślnie zarejestrowano cię w bazie danych ... trwa przełączanie na stronę główną");
						//location.href = "index.php";
				</script>
			<?php
	
	
	}	
		else
		{
			?>
				<script>
						//alert("Błąd Rejestracji, wprowadź nowy login lub hasło");
						//location.href = "Rejestracja.php";
				</script>
			<?php
			
		}
	*/
	
?>
</body>
</html>