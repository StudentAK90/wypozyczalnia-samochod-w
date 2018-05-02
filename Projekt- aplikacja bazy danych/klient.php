<?php
session_start();
$db = require_once('db.php');

error_reporting(E_ALL ^ E_NOTICE);
?>

<html>
<head>
	<title> samochody</title>
</head>
<body>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

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
    padding-top:40px;
  }
</style>

<nav class="navbar  navbar-fixed-top">




<nav class="navbar navbar-default navbar-fixed-botton ">
<a href="admin.php"  ><img src="obrazy/logo2.png"  alt="AutoExpres" style="height:30px" ></a>

 <div class="btn-group">

	
		
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
     Menu <span class="caret"></span> </button>
   
    <ul class="dropdown-menu" role="menu">
		<li><a href="klient.php" >Klient</a></li>
		<li><a href="samochody.php"  >Samochody</a></li>
		</ul>
		<div class="btn-group navbar-left">
<a href="wydaj.php" role="button" class=" btn btn-default" >Wydaj Samochód</a>
		</div>
		<div class="btn-group navbar-left">
<a href="dadaj.php" role="button" class=" btn btn-default" >Dodaj Samochód</a>
		</div>
	</div>
	
		
	
		
	

<div class="navbar-heder .navbar-form  navbar-right" style="padding-right:20px">





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
						confirm("Próba nieautoryzowanego dostępu...</strong><br />trwa przenoszenie do formularza logowania</p>");
						location.href = "index.php";
				</script>
			<?php
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

   
	
	
	
	
	
	
	
	
	<center><h2>Dane klientów</h2></center>
	
	
	<center><h3>Wyszukiwanie danych klientów</h3></center>
	<br></br>
	<div class="contener">
		<form action="wydaj.php" method="POST"  name="wyszukiwarka" >
			<center><label>Wpisz Nazwisko</label>
			<input type="text" name="szukaj" class=".form-control" placeholder="Podaj nazwisko szukanego klienta" maxlength="25" pattern="[A-Z][a-z]{2,15}" />
			<input type="submit" value="szukaj" /></center>
		</form>
		<?php
		if ($_POST['szukaj']> NULL){
			
			print_r("<center><h3>Wynik<h3></center>
		 <table class='table table-striped'>
		<thead>
			<tr>
			<tr><th> imie: </th><th> nazwisko: </th><th> ulica: </th><th> miast: </th><th> Kod pocztowy: </th><th>Nr. Telefonu: </th><th>Nr. Konta Bankowego</th><th>PESEL </th><th><br>
		
		</thead>
		
      </tr>)
	  ");
	 
	
	
	$serch = $_POST['szukaj'];
	
	
	
	$result3 = mysql_query("SELECT  imie, nazwisko, ulica, miasto, kod_pocztowy, nr_tel, nr_konta_bank, PESEL  FROM klient WHERE nazwisko ='$serch'");
	
	if (!$result3) {
			die('Invalid query: ' . mysql_error());
		}
	while($row = mysql_fetch_array($result3)){
		
		echo '<tbody><tr><td>'. $row[imie] .'</td><td>' . $row[nazwisko] .'</td><td>'. $row[ulica] .'</td><td>'. $row[miasto] .'</td><td>'. $row[kod_pocztowy].'</td><td>'. $row[nr_tel].'</td><td>'. $row[nr_konta_bank].'</td><td>'. $row[PESEL]. '</td></tr></tbody>' ;
		
		
	}
	}
	?>
</table>
<br></br>
<br></br>
<br></br>

	<?php
	

	
	
	$result = mysql_query('SELECT  imie , nazwisko, ulica, miasto, kod_pocztowy, nr_tel, nr_konta_bank, PESEL   FROM klient ');
	
	//$resu = ($query );
	
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		}
	
	
	
	
	//$result = mysql_query($query);
	
	if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
	
	
	?>
	<div class="well">
	 <table class="table table-striped">
		<thead>
			<tr>
			<tr><th> imie: </th><th> nazwisko: </th><th> ulica: </th><th> miast: </th><th> Kod pocztowy: </th><th>Nr. Telefonu: </th><th>Nr. Konta Bankowego</th><th>PESEL </th><th><br>
		</thead>
      </tr>
	  
	<?php
	$wynik = mysql_query('SELECT * FROM klient');
	$num = mysql_num_rows($wynik);
	//echo "Ilość wierszy =".$num;
	//echo '<tabele>';
	 while($row = mysql_fetch_row($result))
	{
			print_r( '<tbody><tr><td>'. $row[0] .'</td><td>' . $row[1] .'</td><td>'. $row[2] .'</td><td>'. $row[3] .'</td><td>' . $row[4]. '</td><td>' . $row[5] .'</td><td>'. $row[6] .'</td><td>'. $row[7] .'</td><td>'. $row[8]. '</td></tr></tbody>' );
		
		for($i=0 ; $i < $num ; $i++)
		{
		
		//$result3 = mysql_query('SELECT  imie, nazwisko, ulica, miasto  FROM klient ');
		
		$row = mysql_fetch_row($result);
		
		 //echo '<tr><td>  imie:'. $row['imie'] .'</td><td> nazwisko:'. $row['nazwisko'] .'</td><td>  ulica:'. $row['ulica'] .'</td><td> miast:|'. $row['miasto'] .'</td></tr>';
		 
		
			print_r( '<tbody><tr><td>'. $row[0] .'</td><td>' . $row[1] .'</td><td>'. $row[2] .'</td><td>'. $row[3] .'</td><td>' . $row[4]. '</td><td>' . $row[5] .'</td><td>'. $row[6] .'</td><td>'. $row[7] .'</td><td>'. $row[8].'</td></tr></tbody>' );
			
			//print_r(count($row));
			
		}	//echo '<Select><tr><td>'.$row[0] + $row[1]'.</td><tr></select>'	;
		
		//print_r( '<tbody><tr><td>'. $row[0] .'</td><td>' . $row[1] .'</td><td>'. $row[2] .'</td><td>'. $row[3] .'</td></tr></tbody>' );
	//echo $row['imie'];
	//echo '<br>';
   // echo $row['nazwisko'];
	//echo '<br>';
   // echo $row['ulica'];
	//echo '<br>';
   // echo $row['miasto'];
		
			//echo '<tbody><tr><td>'. $row['imie'] .'</td><td>' . ['nazwisko'] .'</td><td>'. $row['ulica'] .'</td><td>'. $row['miasto'] .'</td></tr></tbody>';
		
		
		echo '</table>';
	}
	
	
	
	
	
	
	
	mysql_free_result($result);
	
	
	
	
	?>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 <div class="contener" >

  <div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	
	
	
	
	
	</div>
	<div class="col-sm-4"></div>
</div>
  
  <br></br>
<br></br>

<div class="row" style="background-color:#E7E7E7">
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