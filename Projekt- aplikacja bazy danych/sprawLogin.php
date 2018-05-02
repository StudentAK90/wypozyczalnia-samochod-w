	<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	</body>
	</html>
	<?php
	
	require_once('db.php');
	
	$login = $_POST['RejNaz'];
	
	$baza = mysql_query("SELECT login FROM klient WHERE login = '$login'");
	
	//echo ($baza);
	
	
	while($aaa = mysql_fetch_assoc($baza)){
		
		$fff = (in_array($login,$aaa));
		//echo ($fff);
		
		echo ($aaa['login']);
	}
		
		

		if($fff == 1 ){
			
		
		
		?>
				<script>
						alert("istnieje już taki nazwa urzytkownika");
						//location.href = "Rejestracja.php";
				</script>
				
			<?php
			
			
		
	}
	else{
		
	
	if ($baza = 1){
		
		?>
				<script>
						alert("Pomyślnie zarejestrowano cię w bazie danych ... trwa przełączanie na stronę główną");
						//location.href = "index.php";
				</script>
			<?php
	
	
	
	}	
		else
		{
			?>
				<script>
						alert("Błąd Rejestracji, wprowadź nowy login lub hasło");
						//location.href = "Rejestracja.php";
				</script>
			<?php
			
		}
	
	
		
	}
	  
	  ?>