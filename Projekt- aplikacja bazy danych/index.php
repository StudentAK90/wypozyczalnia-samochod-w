<?php session_start();
      require_once('db.php');
	  error_reporting(E_ALL ^ E_NOTICE);
?>

<body>
  
  <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />


  <title>AutoExpress - Rejestracja </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>
  <style type="text/css">
  body {
    padding-top: 40px;
  }
</style>

<nav class="navbar  navbar-fixed-top">



	

</div>
<nav class="navbar navbar-default navbar-fixed-botton ">

<div class="contener-fluid">

<div class="navbar-heder .navbar-form " style="padding-right:20px ">
	
		<a href="index.php"  ><img src="obrazy/logo2.png"  alt="AutoExpres" style="height:30px" ></a>
  
		<a  href="index.php" class="btn btn-link" role="button" ><span class="glyphicon glyphicon-home" aria-hidden="true" > Home</a>
		<a href="Rejestracja.php" class="btn btn-link" role="button" >Wypożycz samochodów</a>
	
  
  
  <?php
  
 
    /* jeżeli nie wypełniono formularza - to znaczy nie istnieje zmienna login, hasło i sesja auth
     * to wyświetl formularz logowania
     */
    if (!isset($_POST['login']) && !isset($_POST['password']) && $_SESSION['auth'] == FALSE) {
  ?>
  
      
       <form class="navbar-form navbar-right" role="text" name="form-logowanie" action="index.php" method="POST" >
		<div class="form-group ">
		
          <input type="text" name="login" class="form-control" placeholder="Login"/>
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control"/>
        </div >
        <button type="submit" name="zaloguj" class="btn btn-default">zaloguj</button>
      </form>
	  <form class="navbar-form navbar-right" role="text" action="Rejestracja.php" method="POST">
		<button   typu="submit" name="rejestracja" class="form-control" value="rejestracja" >Rejestracja</button>
	  </form>
	  
  
  
  
  
  <?php
  }
    /* jeżeli istnieje zmienna login oraz password i sesja z autoryzacją użytkownika jest FALSE to wykonaj
     * skrypt logowania
     */
	elseif (isset($_POST['login']) && isset($_POST['password']) && $_SESSION['auth'] == FALSE) {
      
        // jeżeli pole z loginem i hasłem nie jest puste      
		if (!empty($_POST['login']) && !empty($_POST['password'])) {
          
		// dodaje znaki unikowe dla potrzeb poleceń SQL
		$login = mysql_real_escape_string($_POST['login']);
		$password = mysql_real_escape_string($_POST['password']);
        
        // Jeśli użytkownik użył loginu Admin i hasła Admin zaloguj go jako Administrator
		
		$por = strcmp($_POST['login'],admin);
		
		
		
		 if( isset($_POST['password']) && ($por == 0) ){
			 
			 
			 $sql= mysql_num_rows(mysql_query(" SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'")); 
			 
			 if ($sql == 1) {
			 
			  // zmienne sesysje admin (z loginem zalogowanego użytkownika) oraz sesja autoryzacyjna ustawiona na TRUE
				$_SESSION['admin'] = $login;
				$_SESSION['auth'] = TRUE;
			 
			  // przekierwuję użytkownika na stronę z ukrytymi informacjami
				echo '<meta http-equiv="refresh" content="1; URL=admin.php">';
				//echo '<p style="padding-top:10px";><strong>Proszę czekać...</strong><br />trwa logowanie i wczytywanie danych</p>';
				}
				
				// jeżeli zapytanie nie zwróci 1, to wyświetlam komunikat o błędzie podczas logowania
				else{
			?>
				<script>
						confirm("Błąd podczas logowania do systemu, wciśnij OK oby wrócić do strony logowania");
						location.href = "index.php";
				</script>
			<?php
					//echo '<p style="padding-top:10px;color:red";>Błąd podczas logowania do systemu<br />';
					echo '<a href="index.php">Wróć do formularza</a></p>'; 
			
				}
		 }
		 
		 // Jeśli użytkownik użył loginu Admin i innego hasła to wyskakuje komunikat nieprawidlowe login lub haslo
		/* elseif(isset($_POST['password']) && ($por == 0)){
		 
		 header('Location:index.php');
		 echo '<meta http-equiv="refresh" content="1; URL=index.php">';
		 echo '<p style="padding-top:10px";><strong>Podales nieprawidlowe login lub haslo </strong><br />trwa logowanie i wczytywanie danych</p>';
		 }*/
		 else{
		 
		 // szyfruję wpisane hasło za pomocą funkcji md5()
        //$password = md5($password);
		
        /* zapytanie do bazy danych
         * mysql_num_rows - sprawdzam ile wierszy odpowiada zapytaniu mysql_query
         * mysql_query - pobierz wszystkie dane z tabeli user gdzie login i hasło odpowiadają wpisanym danym
         */
		 
		 
		 
		 
		$sql = mysql_num_rows(mysql_query("SELECT password, login FROM `klient` WHERE `login` = '$login' AND `password` = '$password'"));
		
			// jeżeli powyższe zapytanie zwraca 1, to znaczy, że dane zostały wpisane poprawnie i rejestruję sesję
			if ($sql == 1) {
              
			
                // zmienne sesysje user (z loginem zalogowanego użytkownika) oraz sesja autoryzacyjna ustawiona na TRUE
				$_SESSION['user'] = $login;
				$_SESSION['auth'] = TRUE;
                
				
                // przekierwuję użytkownika na stronę z ukrytymi informacjami
				echo '<meta http-equiv="refresh" content="1;  URL=hide.php">';
					
			
				//echo '<p style="padding-top:10px";><strong>Proszę czekać...</strong><br />trwa logowanie i wczytywanie danych</p>';
			 }
			
			
         		
            
            // jeżeli zapytanie nie zwróci 1, to wyświetlam komunikat o błędzie podczas logowania
			else {
				?>
				<script>
						confirm("Błąd podczas logowania do systemu, wciśnij OK oby wrócić do strony logowania");
						location.href = "index.php";
				</script>
			<?php
				echo '<p style="padding-top:10px;color:red";><br />';
				echo '<a href="index.php">Wróć do formularza</a></p>'; 
			}
			}
		}
        
        // jeżeli pole login lub hasło nie zostało uzupełnione wyświetlam błąd
		else {
			?>
				<script>
						confirm("Błąd podczas logowania do systemu, wciśnij OK oby wrócić do strony logowania");
						location.href = "index.php";
				</script>
			<?php
			//echo '<p style="padding-top:10px;color:red";>Błąd podczas logowania do systemu<br />';
			echo '<a href="index.php">Wróć do formularza</a></p>';	
		}
	}
    
    // jeżeli sesja auth jest TRUE to przekieruj na ukrytą podstronę
	elseif ($_SESSION['auth'] == TRUE && !isset($_GET['logout'])) {
		echo '<meta http-equiv="refresh" content="1; URL=hide.php">';
		//echo '<p style="padding-top:10px"><strong>Proszę czekać...</strong><br />trwa wczytywanie danych</p>';
	}
    
	
	
    // wyloguj się
	elseif ($_SESSION['auth'] == TRUE && isset($_GET['logout'])) {
		$_SESSION['user'] = '';
		$_SESSION['auth'] = FALSE;
		
		
		echo '<meta http-equiv="refresh" content="1; URL=index.php">';
		//echo '<p style="padding-top:10px"><strong>Proszę czekać...</strong><br />trwa wylogowywanie</p>';
	}
  ?>
  
  </div>

</div>


</div>
</div>
</nav>

</div>
</div>
</nav>
  
  <div class ="container-fluid" >
		
			
  
  
  <br></br>
  
  <div class="row">
	<div class ="col-md-6">
		
		<center><h2>Samochody miejskie -klasa A</h2></center>
		<small><center><img src="obrazy/klasaA.jpg" class="img-circle img-responsive" alt="klasa A" style="width:450px; height:250px";></center>
		
	</div>
	<div class ="col-sm-6">
				<h3>Fanstastyczny mały miejski samochód najlepiej nadający się do miasta. Sprawdź sam i wypożycz.</h3>

		<button data-toggle="collapse" data-target="#demo" style="width:200px; height:40px" > Zobacz sam</button>
			<div id="demo" class="collapse">
			<li>Audi A1
			<li>AlfaRomeo MiTo
			<li>Fiat 500
			<li>Fiat Panda III
			<li>Ford KA
			<li>Peugeot 108
			<li>Opel Adam
			<li>Toyota Aigo
			<li>Volkswagen UP
			
			</div>
			<br></br>
			<div>
				<a href="Rejestracja.php" class="btn btn-primary" role="button">Wypożycz samochodów </a>
			</div>
	</div>
	</div>
	
	<br></br>
	
	
	
	
	<div class="row">	
			<div class ="col-sm-6">
				<center><h2>Samochody małe -klasa B</h2></center>
				<center><img src="obrazy/klasaBB.jpg" class="img-circle img-responsive" alt="klasa A" style ="width:450px; height:250px"></center>
			</div>
			<div class ="col-sm-6">
								<h3>Fanstastyczny przyestrony miejski samochód najlepiej nadający się do miasta. Sprawdź sam i wypożycz.</h3>

				<button data-toggle="collapse" data-target="#B" style="width:200px; height:40px"> Zobacz sam</button>
					<div id="B" class="collapse">
						<li>Audi A2
						<li>Citroen C3
						<li>Fiat Grande Punto
						<li>Ford fiesta
						<li>Skoda Fabia
						<li>Opel Corsa
						<li>Volkswagen Polo
					</div>
				<br></br>
			<div>
				<a href="Rejestracja.php" class="btn btn-primary" role="button">Wypożycz samochodów </a>
			</div>
		
			</div>
		</div>
		
		<br></br>
		
		<div class="row">
			<div class ="col-sm-6">
				<center><h2>Samochody kompaktowe -klasa C</h2></center>
			<center><img src="obrazy/klasaC.jpg" class="img-circle img-responsive" alt="klasa A" style ="width:450px; height:250px"></center>
			</div>
			<div class ="col-sm-6">
				<h3>Fanstastyczny kompaktowy samochód najlepiej nadający się do jazdy po miaście i weekendowe wypady za miasto . Sprawdź sam i wypożycz.</h3>

				<button data-toggle="collapse" data-target="#compakt" style="width:200px; height:40px"> Zobacz sam</button>
					<div id="compakt" class="collapse">
						<li>Audi A3
						<li>AlfaRomeo Gullieta
						<li>Citroen C4
						<li>Citroen DS4
						<li>Fiat Bravo
						<li>Ford Focus
						<li>Honda Civic
						<li>Opel Astra V
						<li>Volkswagen Golf VII
					</div>
					<br></br>
			<div>
				<a href="Rejestracja.php" class="btn btn-primary" role="button">Wypożycz samochodów </a>
			</div>
					
			</div>
		</div>
		
		<br></br>
		
		
		
		<div class="row">
			<div class ="col-sm-6">
				 <center><h2>Samochody klasy średniej -klasa E</h2></center>
				<center><img src="obrazy/klasapreminu.jpg" class="img-circle img-responsive" alt="klasa A" style ="width:450px; height:250px"></center>
			</div>
			
			<div class ="col-sm-6">
								<h3>Fanstastyczny dynamiczny samochód najlepiej nadający się do miasta i na długie wyjazdy za miasto. Sprawdź sam i wypożycz.</h3>

				<button data-toggle="collapse" data-target="#srednia" style="width:200px; height:40px"> Zobacz sam</button>
					<div id="srednia" class="collapse">
					
						<li>Audi A4
						<li>AlfaRomeo 159
						<li>Citroen C7
						<li>Peugeot 508
						<li>SAAB 9-3
						<li>Skoda Octavia
						<li>Volkwagen Passat
					</div>
					<br></br>
					<a href="Rejestracja.php" class="btn btn-primary" role=""button>Wypożycz samochód"</a>
			</div>
		</div>
		
		<br></br>
		
		
		
		<div class="row">
			<div class ="col-sm-6">
				<center><h2>Samochody premium -klasa F</h2></center>
				<center><img src="obrazy/klasaE.jpg " class="img-circle img-responsive" alt="klasa A" style ="width:450px; height:250px"></center>
			</div>
			<div class ="col-sm-6">
							<h3>Fanstastyczny luksusowy samochód najlepiej nadający się do długich wyjazdów za miasto. Sprawdź sam i wypożycz.</h3>

				<button data-toggle="collapse" data-target="#premium" style="width:200px; height:40px"> Zobacz sam</button>
					<div id="premium" class="collapse">
						<li>Audi A8
						<li>BMW s7
						<li>Jaguar XJ
						<li>Mercedes S
					</div>
					<div>
					<br></br>
						<a href="Rejestracja.php" class="btn btn-primary" role="button">Wypożycz samochód</a>
					</div>
			</div>
		</div>
		
		<br></br>
		<div class="row">
			<div class ="col-sm-6">
				<center><h2>Samochody luksusowe </h2></center>
				<center><img src="obrazy/lumuzyna.jpg" class="img-circle img-responsive" alt="klasa A" style ="width:450px; height:250px"></center>
			</div>
			<div class ="col-sm-6">
								<h3>Fanstastyczny prestiżowy samochód najlepiej nadający w długie podróże. Sprawdź sam i wypożycz.</h3>

				<button data-toggle="collapse" data-target="#limuzyna" style="width:200px; height:40px"> Zobacz sam</button>
					<div id="limuzyna" class="collapse">
						<li>Bentley 
						<li>Rolls-royce Phantom
						<li>Maybach
					</div>
					<div>
					<br></br>
						<a href="Rejestracja.php" class="btn btn-primary" rola="button">Wypożycz samochód</a>
					</div>
			</div>
		</div>
	
  
  
 </div>
  
  <br></br>
  <br></br>
  
 </div>

</div>


 
 
 <div class="row" style="background-color:#E7E7E7";>
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