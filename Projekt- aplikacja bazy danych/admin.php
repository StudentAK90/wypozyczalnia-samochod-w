<?php
session_start();

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
  <br>
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
	
	<div>
		<h1>Strona Administratora</h1>
	</div>
	<br></br>
	<div class="contener-fluid">
		<a href="klient.php" type="button"  class=" btn btn-primary btn-block"    value="Klient" >Klient</a>
		
		</form>
	</div>
	<br></br>
	<div class="contener-fluid">
		<a href="samochody.php"  type ="button" class="btn btn-primary btn-block "  value="Rozlicz Samochód" >Samochody</a>
		</form>
	</div>
	<br></br>
	
	
	</div>
	<div class="col-sm-4"></div>
</div>
  
  
  
  
  
  


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