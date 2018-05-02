<?php
session_start();
require_once('db.php');
?>

<html>
<head>
	<title> Strona Admina</title>
</head>
<body>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />


</head>

<body>
  
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
    padding-top: 170px;
  }
</style>

<nav class="navbar  navbar-fixed-top">


<div class="container-fluid" style="background-color:#993366 ;color:#fff;height:85px;">
<div class="navbar-header">

<p></p>
<div>
	<a href="admin.php"><img src="obrazy/logo2.png" class="img-responsive" alt="AutoExpres"  ></a>
</div>
  </div> 
</div>
<nav class="navbar navbar-default navbar-fixed-botton navbar-inverse">
<div class="btn-group navbar-left">
<div class="btn-group">

	
		
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
     Menu <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
		<li><a href="klient.php" >Klient</a></li>
		<li><a href="samochody.php"  >Samochody</a></li>
	
		</ul>
		
		
	</div>
		
	
	
		<a href="wydaj.php" role="button" class=" btn btn-default" >Wydaj Samochód</a>
	</div>
 
<div class="contener-fluid text-right ">

<div class="navbar-heder .navbar-form navbar-inverse navbar-right" style="padding-right:20px">


		
   
  
   
</div>
	
   
   
   
   
   
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

    <div class="contener" >

<?php /*

if ($_SESSION['auth'] == TRUE) {
         
           
  }
  else {
          echo '<meta http-equiv="refresh" content="1; URL=index.php">';
          echo '<p style="padding-top:10px;color:white";><strong>Próba nieautoryzowanego dostępu...
		  </strong><br />trwa przenoszenie do formularza logowania</p>';

  }
  */?>

  <div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<center><h3>Klient Zagraniczny</h3></center>
	<form role="form" action="skrypt.php" method="POST" autocomplete="no"  name="Form1" onsubmit="return validateForm()">
		<div class="form-group">
				<label for="id_NrPoszport">Nr paszportu</label>
				<input type="text" class="form-control " id="NrPaszport" name="Paszport" placeholder="wpisz 8 liczby 0-9 " pattern="[0-9]{8}" title="wpisz 8 liczby 0-9 " required maxlength="8">
				
				<br></br>
			</div>
			 <div class="form-group">
				<label for="id_SerPaszport">Numer seri paszportu</label>
				<input type="text" class=".form-control" name="NrSerPoszport" id="NrSeriPaszportu" placeholder=" wpisz 11 cyfr " pattern="[0-9]{11}" required maxlength="11" >
			 </div>
			 <br></br>
			
			 <div class="form-group">
				<label for="id_obywatel">Obywatelstwo</label>
				
					
				<select   class="form-control"  required name="Obywatelstwo" placeholder="Polska">
					<option value="Australia">Australia</option>
					<option value="Arabia Sałdyjska">Arabia Sałdyjska</option>
					<option value="Białoruś">Białoruś</option>
					<option value="Czechy ">Czechy</option>
					<option value="Chiny">Chiny</option>
					<option value="Francja">Francja</option>
					<option value="Finlandia">Finlandia</option>
					<option value="Indie">Indie</option>
					<option value="Japonia">Japonia</option>
					<option value="Kazachstan">Kazachstan</option>
					<option value="Nowa Zelandia">Nowa Zelandia</option>
					<option value="Niemcy">Niemcy</option>
					<option value="Norwegia">Norwegia</option>
					<option value="Polska" selected>Polska</option>
					<option value="RFN">RFN</option>
					<option value="Singapur">Singapur</option>
					<option value="Szwecja">Szwecja</option>
					<option value="Włochy">Włochy</option>
					<option value="Ukraina">Ukraina</option>
					<option value="UK">UK</option>
					<option value="ZEA">ZEA</option>
					
				</select>
				
			 </div>
			 <br></br>
			 <div class="form-group">
				<label for="id_krajPoch">Kraj pochodzenia</label>
				
				<select  class="form-control" required  name="KrajPoch" >
					<option value="Australia">Australia</option>
					<option value="Arabia Sałdyjska">Arabia Sałdyjska</option>
					<option value="Białoruś">Białoruś</option>
					<option value="Czechy ">Czechy</option>
					<option value="Chiny">Chiny</option>
					<option value="Francja">Francja</option>
					<option value="Finlandia">Finlandia</option>
					<option value="Indie">Indie</option>
					<option value="Japonia">Japonia</option>
					<option value="Kazachstan">Kazachstan</option>
					<option value="Nowa Zelandia">Nowa Zelandia</option>
					<option value="Niemcy">Niemcy</option>
					<option value="Norwegia">Norwegia</option>
					<option value="Polska" selected>Polska</option>
					<option value="RFN">RFN</option>
					<option value="Singapur">Singapur</option>
					<option value="Szwecja">Szwecja</option>
					<option value="Włochy">Włochy</option>
					<option value="Ukraina">Ukraina</option>
					<option value="UK">UK</option>
					<option value="ZEA">ZEA</option>
					
				</select>
	
			 </div>
			 
			 <br></br>
			 <div class="form-group">
				<label for="id_plec">Płeć</label>
				
				<select id="plec" required class="form-control" name="plec">
					<option value="Mężczyzna">Mężczyzna</option>
					<option value="Kobieta">Kobieta</option>
				</select>
			<br></br>
	 <input type="submit" class="btn btn-primary" value="Wyślij mnie!" role="button"/>
	 </form>
	</div>
	 </div>
	<div class="col-sm-4"></div>
</div>
  
  
  <?php
  
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
		
		
	$wyniKlietZag = mysql_query ("INSERT INTO klient_zag ( nr_paszport, nr_serii_paszport, obywatelstwo, kraj_pochodzenia, plec, klient_id_klient )
													VALUES 
														('$_POST[Paszport]', '$_POST[NrSerPoszport]', '$_POST[Obywatelstwo]', '$_POST[KrajPoch]',  '$_POST[plec]','$WypSam_id')");
	
			 echo mysql_errno() . ": " . mysql_error() . "\n";
			 //$TWyp_id = mysql_insert_id($con);	
			 
			
  
  ?>
  
  
  
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
</html>