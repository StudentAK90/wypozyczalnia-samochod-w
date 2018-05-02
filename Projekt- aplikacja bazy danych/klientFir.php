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
	
	
		 <center><h2>Dane Firmowe</h2></center>
			<center><h3>Podaj swoje dane firmy </h2></center>
			 
			 
		<form role="form" action="skrypt.php" method="POST" autocomplete="no"  name="Form1" onsubmit="return validateForm()">
			<div class="form-group"  >
			
			<br></br>
				<label for="id_NIP">NIP</label>
				<input type="text" class="form-control" id="NIP" name="NIP" placeholder="xxxxxxxxxx" name="NIP" required maxlength="10" pattern="[0-9]{10}" title="Podaj 10 cyfrowy NIP" >
				
				
				
			</div>
			<br></br>
			 <div class="form-group">
				<label for="id_NazFirmy">Nazwa firmy</label>
				<input type="text" class="form-control" id="NazwaFirmy" placeholder="nazwę firmy" name="NazFirmy" required maxlength="25" pattern="[A-ZĄĘŁŚĆÓŻŹŃ][a-ząęłóśćżźń]{5,23}" title="Podaj poprawną nazwę wg wzorca Xxxxxx" >
			 </div>
			 <br></br>
			 <div class="form-group">
			 <label for="id_telKOM">Telefon Komórkowy</label>
			 <input type= "text" class="form-control" id="TelKom" placeholder="000-00-000" required name="TelKom" maxlength="10" pattern="([0-9 ]{3}-[0-9]{2}-[0-9]{3})" >
			</div>
			<br></br>
			
			<br></br>
	 <input type="submit" class="btn btn-primary" value="Wyślij mnie!" role="button"/>
	 </form>
	</div>
	<div class="col-sm-4"></div>
</div>
  
  
  
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