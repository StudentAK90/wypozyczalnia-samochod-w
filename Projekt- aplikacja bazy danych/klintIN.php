<?php
session_start();
require_once('db.php');
error_reporting('notice');
?>


  <html>
<head>
	<title>AutoExpres - Rejestracaj</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script type="text/javascript"></script>
 <link type="text/css" href="css/pepper-grinder/jquery-ui-1.8.21.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="jquery-ui-1.8.21.custom.min.js"></script>
		
		
<script type="text/javascript">
	$(function(){

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});

				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); },
					function() { $(this).removeClass('ui-state-hover'); }
				);

			});
			
			$(function(){

				// Datepicker
				$('#datepicker1').datepicker({
					inline: true
				});

				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); },
					function() { $(this).removeClass('ui-state-hover'); }
				);

			});
			
</script>			

  
  
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
<nav class="navbar navbar-default navbar-fixed-botton " >

 
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

</div>
<a href= "daneUzyt.php"><img src="obrazy/logo2.png"  alt="AutoExpres" style="height:30px"> </a>

</div>
</nav>

</div>
</div>
</nav>
  
  <div class ="container-fluid" >

    <div class="contener" >



  <div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<center><h2>Klient indywidualny</h2></center>
	
	
			
<form id="formularz" action="proba.php" method="post" autocomplete="no"
    onsubmit="return sprawdz_formularz()"><div>
	<h3>Data wyporzyczenia samochodu:</h3>
Od: <input type="text" placeholder="" name="bdaymonth1" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d"  id="datepicker" required ><br>
<br>
Do: <input type="text" placeholder="" name="bdaymonth2" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" id="datepicker1" required ><br>
<br>

</div>
			
		

<?php

///////////////////////////////////SPRAWDZANIE DANYCH WYSYŁANYCH////////////////////////////////////////////////////

$od = $_POST['bdaymonth1'];
$do = $_POST['bdaymonth2'];
$marka = $_POST['marka'];




///////////////////////////wpisywanie samochodu do bazy////////////////////////////////


$result = mysql_query(" SELECT id_samochod, Marka_sam, Model_sam, cena  FROM samochod ORDER BY id_samochod ");
 //print(mysql_errno());

//$result3 = mysql_query("SELECT  Marka_sam, Model_sam  FROM samochod ORDER BY Model_sam ");
 ?>
<div>
<p><h3>Wybierz samochód </h3>

	<h4>(cena za dzień wyporzyczenia)</h4></p>
</div>
 <select name="marka" class="form-group" >
 <?php
 if (!$result) {
			die('Invalid query: ' . mysql_error());
		}
	while($row = mysql_fetch_array($result)){
		
		//echo '<tbody><tr><td>'. $row['Marka_sam'] .'</td><td>' . $row['Model_sam'] .'</td></tr></tbody>' ;
		
		//echo '<option>'. $row['Marka_sam']  .'</option>' ;
		
		echo '<option>'.  $row['id_samochod'] . '<td> '. $row['Marka_sam'] .'</td> <td>' . $row['Model_sam'] .'</td> <td>' . $row['cena'] .' zł </option>' ;
	
	//$SMarka = $row['Marka_sam'];
	//$SModel =$row['Model_sam'];
	
	
	
}
 
	?>
 </select>
 
<?php	

//var_dump($row);
/////////////////////////////////////////CENA SAMOCHODU///////////////////////////////////////////
 
 
$cena = mysql_query("SELECT cena FROM samochod  ");
 //echo mysql_errno() . ": " . mysql_error() . "\n";
While($row = mysql_fetch_assoc($cena)){
	
	//echo '<td><tr>'.$row['cena'].'</tr></td>';
	
	$CenaZaDzien = $row['cena'];
	
	

}
 ?>
 
 
 

 <!-----------------------------------------PRZYCISK WYSYŁANIA------------------------------------->
  <br>
 <div>
	  <input type="submit" class="btn btn-primary" value="Wyślij mnie!" role="button"/>
	</div>
 </form>
 </div>
 <?php
 ///////////////////////////////////////////SPRAWDZANIE CZY SAMOCHÓD NIE ZOSTAŁ ZAREZERWOWANY//////////////////////////////////////////////////////////
 
 
 
 /*
 $SQL = mysql_query("ELECT wypozyczenia.data_wpl, wypozyczenia.data_od, wypozyczenia.Samochod_id_samochod, samochod.id_samochod, samochod.Marka_sam, samochod.Model_sam
FROM wypozyczenia, samochod
WHERE wypozyczenia.Samochod_id_samochod = samochod.id_samochod
AND wypozyczenia.data_wpl
BETWEEN '2016-01-22'
AND '2016-01-25'
AND wypozyczenia.data_od
BETWEEN '2016-01-23'
AND '2016-01-30' AND samochod.Marka_sam IN(Volvo) AND samochod.Model_sam IN(S60)
");
 
 */
 //$dataOd;

 
 
 ?>
 
	</div>
	<div class="col-sm-4"></div>
	
</div>
  
  
  
  
  
  <br>


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------->

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
		<div class="col-sm-12" style="background-color:#333366; color:white;height:35px";>
		
			<center><p><b>Designe by Adam Koziak</b></p></center>
		</div>
	</div>
</div>
 

 
</div>

  </nav>
  


</body>

<script>
function sprawdz_formularz()
{
// Get the current date at midnight.

var now = new Date(); 

var todayAtMidn = new Date(now.getFullYear(), now.getMonth(), now.getDate());


// Set specificDate to a specified date at midnight.
//var specificDate = new Date("03/08/2016");

var f = document.forms['formularz'];
var specificDate = new Date(f.bdaymonth1.value);
var dataDo = new Date(f.bdaymonth2.value);

// Compare the two dates by comparing the millisecond
// representations.
if (todayAtMidn.getTime() < specificDate.getTime())
{
    //document.write("Same");
	//document.write(specificDate);
	
	if(specificDate.getTime() < dataDo.getTime() ){
		
		
		return  true ;
	}
	else{
		alert("Nie prawidłowa data w polu 'DO'.Sprawdź ją ");
		return false;
	}
}
else
{
    alert(" Data w polu OD jest nie aktualna. Popraw ją. " );
	return false;
}

//Output: Different
}



		</script>


</html>