
<?php session_start();
      require_once('db.php');
	  error_reporting(E_ALL ^ E_NOTICE);
?>



<html>
<head>
	<title>AutoExpres - Rejestracaj</title>
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

<nav
<nav class="navbar  navbar-fixed-top">



	

</div>
<nav class="navbar navbar-default navbar-fixed-botton ">

<div class="contener-fluid">

<div class="navbar-heder navbar-form " style="padding-right:20px ">
	
		<a href="index.php"  ><img src="obrazy/logo2.png"  alt="AutoExpres" style="height:30px" ></a>
  
		<a  href="index.php" class="btn btn-link" role="button" ><span class="glyphicon glyphicon-home" aria-hidden="true" > Home</a>
		<a href="Rejestracja.php" class="btn btn-link" role="button" >Wypożycz samochodów</a>
	
  
  	
</div>

</div>

</div>
</div>
</nav>

</div>
</div>
</nav>
<br>
<div class="contener">






	<!----------------------------DANE NICK HASŁO E_MAIL------------------------------------------------>





	<div class="row">
		
		<div class="col-md-6">
		
		<center><center><h3>Rejestracja nowego użytkownika</h3></center>
			<br>
			<form action="skrypt.php" method="POST">
			 <div class="form-group input-group-sm form-inline" >
				<label>Nowy Login </label>
				<input type="text" name="RejNaz" class="form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" title="Pierwsza duża litera,co najmniej 4 znaków " required >
				 </div>
				 <div class="form-group input-group-sm form-inline" >
				<label>Hasło</label>
				<input type="password" name="haslo" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Hasło powino składać się z Wielkiej litery, małych liter oraz z numeru łącznie 8 znaków"  class="form-control" >
				</div>
				 <div class="form-group input-group-sm form-inline" >
				<label>Adares e-mali</label>
				<input type="email" name="email"  title="proszę wpisać poprawny addres e-mali." required class="form-control">
				</div>
				 <div class="form-group input-group-sm form-inline" >
			
				<center><h2>Dane osobowe</h2></center>
				<div class="form-grup input-group-sm form-inline ">
				<label for="id_imie"> Imię:   </label>
				<input type="text" class="form-control " id="imie" name="imie"  placeholder="imię np. JAN" required   maxlength="15" pattern="[A-ZĄĘŁŚĆÓŻŹŃ][a-ząęłóśćżźń]{2,15}" >
			<p></p>
			</div>
			 <div class="form-group input-group-sm form-inline" >
				<label for="id_nazwisko">Nazwisko:</label>
				<input type="text" class="form-control" id="nazwisko" placeholder="nazwisko np. KOWALSKI" name="nazwisko" required maxlength="20" pattern="[A-ZĄĘŁŚĆÓŻŹ][a-ząęłóŚśĆćżŻźŹ][^!<>=+@#$%*_]{1,15}" >
			 </div>
			<p></p>
			 <div class="form-group input-group-sm form-inline" >
			 
				<label for="indemtyfikator_inputu"> Ulice: </label>
				<input type="text" class="form-control" id="ulica" placeholder="podaj ulice na której mieszkasz" name="ulica" required maxlength="35" pattern="[A-ZĄĘŁŚĆÓŻŹŃ][a-ząęłóśćżźń][^!<>=+@#$%*_]{1,15}" >
			 </div>
			 <p></p>
				
				
				
				
				
				
				
				<!--<input type="submit" class="btn btn-lg btn-success" value="Rejestruj">-->
				</div>
			<!--</form>-->
			</center>
		</div>	
		
	

	<!----------------------------DANE OSOBOWE------------------------------------------------>
	
	<div class="col-md-6">
	<div class="text">
   
<center><h2>Dane osobowe</h2></center>
	
	<center>
		<!--<form role="form" action="skrypt.php" method="POST" autocomplete="no"  name="Form1" onsubmit="return validateForm()">-->
			<div class="form-grup form-inline ">
	
		<p></p>
			 <div class="form-group input-group-sm">
				<label for="id_miasto">Miasto:</label>
				<input type="text" class="form-control" id="miasto" placeholder="miasto np. Sosnowiec" name="miasto" required maxlength="30" pattern="[A-ZĄĘŁŚĆÓŻŹŃ][a-ząęłóśćżźń][^!<>=+@#$%*_]{1,15}" >
			 </div>
	 <p></p>
			  <div class="form-group input-group-sm">
				<label>Nr. domu / mieszkania:</label>
				<p>
				<input type="text" class="form-control input-group-ds" id="Nrdom" placeholder="np. 41/7" name="Nrdom" required maxlength="30" pattern="(\d){0,3}(\d)[^!<>=+@#$%*_]{0,3}" >
			 </p>
			 </div>
			
			 <p></p>
			 <div class="form-group input-group-sm">
				<label for="id_numTel">Numer telefon:</label>
				<input type="tel" class="form-control" id="telefon" name="numerTel" placeholder="w formacie 000-00-000"  required pattern="[0-9]{3}-[0-9]{3}-[0-9 ^!<>=+@#$%*_]{3}" title="Podaj w formie XXX-XXX-XXX" maxlength="11">
			 </div>
			 <p></p>
			 <div class="formgroup input-group-sm">
			 <label for="id_NumKonta" >Numer Konta:</label>
			 <input type="text" class="form-control" id="NumerKonto" name="NumerKonto" placeholder="xxxxxxxxx"  pattern="PL\d{2}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}[ ]\d{4}|PL\d{26}"  required maxlength="36" title="W przypadku Polski numer IBAN ma 28 znaków według schematu:
PL cc aaaa aaaa bbbb bbbb bbbb bbbb
gdzie:
PL - kod ISO 3166-1 kraju (w tym przypadku Polski),
cc - 2-cyfrowa liczba kontrolna,
aaaa aaaa - 8 cyfrowy numer rozliczeniowy banku,
bbbb bbbb bbbb bbbb - 16 cyfrowy numer rachunku bankowego Klienta.">
			 </div>
			 <p></p>
			 <div class="form-group input-group-sm">
				<label for="id_kodpoczta">Kod pocztowy:</label>
				<input type="text" class="form-control" id="kodPocztowy" name="KodPoczta" placeholder="w formie 00-000" pattern="[0-9]{2}-[0-9 ^!<>=+@#$%*_]{3}" title="Podaj w formie XX-XXX" required maxlength="6" >
			 </div>
			 <p></p>
			 <div class="form-group input-group-sm">
				<label for="id_pesel">PESEL:</label>
				<input type="text" class="form-control" id="PPESEL" name="PESEL" requred pattern="[0-9]{11}" title="Podaj 11 cyfrowy numer PESEL" required maxlength="11">
			 </div>
			 <br>
			 <br>
			 <!--<input type="submit" class="btn btn-primary" value ="wyślij" /> -->
			 <br></br>
			
			</div> 
			</center>
		
		
		
		</div>
		
	</div>
	<div class="col-md-12">
	<center><input type="submit" class="btn btn-lg btn-success" value="Rejestruj"></center>
	</form>
	</div>
		</div>
		
		
		
		
		

<?php
/*
$login = $_POST['RejNaz'];
	
	$ggg = mysql_query("SELECT login FROM klient WHERE login = '$login' ");
	
	while($aaa = mysql_fetch_assoc($ggg)){
		
		echo ($aaa);
		
		
		if(in_array($login,$aaa)){
			
		
		
		?>
				<script>
						alert("istnieje już taki nazwa urzytkownika");
						header(" location : Rejestracja.php");
				</script>
			<?php
		
	}
	else{
		
		echo ('Zostałęś poprawnie zarejestrowany');
		
	}
	
	}
	*/
	?>
		
		
		
	</div>
<br>
 
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
