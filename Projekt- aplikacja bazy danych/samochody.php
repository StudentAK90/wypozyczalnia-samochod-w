<?php
session_start();
$db = require_once('db.php');

error_reporting(E_ALL ^ E_NOTICE);
?>

<html>
<head>
	<title> AutoExpres - samochody</title>
</head>
<body>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<style type="text/css">
  body {
    padding-top: 150px;
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

   
	
	
	
</div>
  
  </div>
 <br>
	<?php
	
	$porownaj = strcmp($_POST[DataRej],NULL );
	
	
	if (strcmp($_POST[marka],NULL )){
		//print('zmienna OK Marka' );
		
		
			if (strcmp($_POST[model],NULL )){
			//print('zmienna OK Model' );
		
				if (strcmp($_POST[kolor],NULL )){
				//print('zmienna OK' );
		
					if (strcmp($_POST[DataRej],NULL )){
					//print('zmienna OK' );
					
						if (strcmp($_POST[rejestracja],NULL )){
						//print('zmienna OK' );
							
								if (strcmp($_POST[ubez],NULL )){
								//print('zmienna OK' );
							
									if (strcmp($_POST[VIN],NULL )){
									//print('zmienna OK' );
							
										
										if (strcmp($_POST[kaucja],NULL )){
										//print('zmienna OK' );
							
											if (strcmp($_POST[ilosc],NULL )){
										//print('zmienna OK' );
							
								
								
								
								
										$Sql = mysql_query("INSERT INTO samochod 
																VALUES
														( NULL, '$_POST[DataRej]', '$_POST[rejestracja]',' $_POST[ubez]', '$_POST[VIN]', '$_POST[marka]', '$_POST[model]', '$_POST[kolor]', '$_POST[kaucja]', '$_POST[ilosc]', '$_POST[cena]' )");
											//if(!$Sql) die ('Invalid query: ' . mysql_error());
	
								
												}
											else{
											//print('zmienna NOK');
			
												}
											
											
										}
										else{
										//print('zmienna NOK');
		
										}
										
										
						
										}
									else{
									//print('zmienna NOK');
		
										}
									
									
						
									}
								else{
								//print('zmienna NOK');
		
								}
								
								
						
							}
						else{
						//print('zmienna NOK');
		
						}
						
						
						
						
					
					
					
					}
					else{
					//print('zmienna NOK');
		
					}
				}
				else{
				//print('zmienna NOK');
		
				}
		
		
		}
		else{
		//print('zmienna NOK');
		
		}
		
		
		
		
	}
	else{
		//print('zmienna NOK');
		
	}
	
	
		
	?>
	
	<center><h3>Wyszukiwanie Samochodów</h3></center>
	<br></br>
	<div class="contener" style=" padding:20px">
		<form action="samochody.php" method="POST"  name="wyszukiwarka" >
			<center><label>Wpisz marke samochodu</label>
			<input type="text" name="szukaj" class=".form-control" placeholder="Podaj szukaną markę samochodu" maxlength="25" pattern="[A-Z][a-z]{2,15}" />
			<input type="submit" value="szukaj" /></center>
		</form>
		<?php
		if ($_POST['szukaj']> NULL){
			
			echo"<center><h3>Wynik<h3></center>
			<div class='well' >
		 <table class='table table-striped'>
		<thead>
			<tr>
			<tr><th> Marka samochodu: </th><th> Model samochodu : </th><th> Ubezpieczenie: </th><th> Data rejestracji </th><th> Ubezpieczenie: </th><th>  Nr rejestracyjnego :</th><th> Nr VIN </th><th><br>
		
		</thead>
		
      </tr>
	  ";
	 
	
	
	$serch = $_POST['szukaj'];
	
	
	
	$result3 = mysql_query  ("SELECT Marka_sam, Model_sam, kolor_sam, Data_rejestracji, nr_rejestracyjnego, ubezpieczenie, nr_VIN, kaucja, EXTRACT(
DAY FROM ubezpieczenie ) AS Dzien, EXTRACT(
MONTH FROM ubezpieczenie ) AS miesiac, EXTRACT( Year
FROM ubezpieczenie ) AS rok, DATE_FORMAT( `Data_rejestracji` , GET_FORMAT( DATE, 'EUR' ) ) AS rej, DATE_FORMAT( `ubezpieczenie` , GET_FORMAT( DATE, 'EUR' ) ) AS ubez
FROM samochod WHERE Marka_sam ='$serch'
ORDER BY rok DESC , miesiac, Dzien ASC ");
	
	if (!$result3) {
			die('Invalid query: ' . mysql_error());
		}
	while($row = mysql_fetch_array($result3)){
		
		echo '<tbody><tr><td>'. $row[Marka_sam] .'</td><td>' . $row[Model_sam] .'</td><td>'. $row[kolor_sam] .'</td><td>'. $row[rej] .'</td><td>'. $row[ubez] .'</td><td>'. $row[nr_rejestracyjnego].'</td><td>'.$row[nr_VIN].'</td></tr></tbody>' ;
		
		
	}
	}
	?>
</table>
</div>
<br></br>
<br></br>
<br></br>


  </div>

	<?php
	

	
	
	$result = mysql_query("SELECT Marka_sam, Model_sam, kolor_sam, Data_rejestracji, nr_rejestracyjnego, ubezpieczenie, nr_VIN, kaucja, EXTRACT(
DAY FROM ubezpieczenie ) AS Dzien, EXTRACT(
MONTH FROM ubezpieczenie ) AS miesiac, EXTRACT( Year
FROM ubezpieczenie ) AS rok, DATE_FORMAT( `Data_rejestracji` , GET_FORMAT( DATE, 'EUR' ) ) AS rej, DATE_FORMAT( `ubezpieczenie` , GET_FORMAT( DATE, 'EUR' ) ) AS ubez
FROM samochod
ORDER BY rok DESC , miesiac, Dzien ASC "
	
	);
	
	//$resu = ($query );
	
		//if (!$result) {
		//	die('Invalid query: ' . mysql_error());
		//}
	
	
	
	
	//$result = mysql_query($query);
	/*
	if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
	
	*/
	?>
	<div class="contener-fluid" style=" padding:20px" >

	<center><h2>Samochody</h2></center>
	<br></br>
	<div class="well">
	 <table class="table table-striped">
		<thead>
			<tr>
			<tr><th> <tr><th> Marka samochodu: </th><th> Model samochodu : </th><th> Kolor: </th><th> Data rejestracji </th><th> Nr rejestracyjnego: </th><th> Ubezpieczenie: </th><th> Nr VIN</th><th>kaucja </th><th><br>
			
		</thead>
      </tr>
	  
	<?php
	$wynik = mysql_query("SELECT Marka_sam, Model_sam, kolor_sam, Data_rejestracji, nr_rejestracyjnego, ubezpieczenie, nr_VIN, kaucja, EXTRACT(
DAY FROM ubezpieczenie ) AS Dzien, EXTRACT(
MONTH FROM ubezpieczenie ) AS miesiac, EXTRACT( Year
FROM ubezpieczenie ) AS rok, DATE_FORMAT( `Data_rejestracji` , GET_FORMAT( DATE, 'EUR' ) ) AS rej, DATE_FORMAT( `ubezpieczenie` , GET_FORMAT( DATE, 'EUR' ) ) AS ubez
FROM samochod
ORDER BY rok DESC , miesiac, Dzien ASC ");

	$num = mysql_num_rows($wynik);
	//echo "Ilość wierszy =".$num;
	//echo '<tabele>';
	 while($row = mysql_fetch_row($result))	
	{
			echo '<tbody><tr><td>'. $row[0] .'</td><td>' . $row[1] .'</td><td>'. $row[2] .'</td><td>'. $row[11] .'</td><td>' . $row[4]. '</td><td>' . $row[12] .'</td><td>'. $row[6] . '</td><td>'. $row[7]. '</td></tr></tbody>' ;
		
		for($i=0 ; $i < $num ; $i++)
		{
		
		//$result3 = mysql_query('SELECT  imie, nazwisko, ulica, miasto  FROM klient ');
		
		$row = mysql_fetch_row($result);
		
		 //echo '<tr><td>  imie:'. $row['imie'] .'</td><td> nazwisko:'. $row['nazwisko'] .'</td><td>  ulica:'. $row['ulica'] .'</td><td> miast:|'. $row['miasto'] .'</td></tr>';
		 
		
			echo '<tbody><tr><td>'. $row[0] .'</td><td>' . $row[1] .'</td><td>'. $row[2] .'</td><td>'. $row[11] .'</td><td>' . $row[4]. '</td><td>' . $row[12] .'</td><td>'. $row[6] . '</td><td>'. $row[7]. '</td></tr></tbody>' ;
			
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
	</div>
	 <div class="contener" >

  
</div>
  
  <!---------------------------------------------------------------------------------->

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