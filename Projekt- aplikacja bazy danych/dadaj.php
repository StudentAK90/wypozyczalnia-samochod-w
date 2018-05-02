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
    padding-top: 130px;
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

   
	
	<div class="row">
		<div class="formgrup">
	<center><legend>Dane samochodów:</legend></center>
	<br>
		<div class="col-md-6">
		
				
		
<center><form role="form" action="samochody.php" Method="POST"  >
	
	<div class="formgrup input-group-sm form-inline" >
		<label>Marka samochodu:</label>
		<p><input type="text"  name="marka" required placeholder=" Opel" title="" pattern="[A-Z][a-z]{2,14}" maxlength="15"></p>
	</div>
	<div class="formgrup">
		<label>Model samochodu :</label>
	</div>
	<div class="formgrup">
		<p><input type="text" class=".form-grup" name="model" required placeholder=" Astra" title="" pattern="[A-Z 0-9][a-z 0-9]{1,10}" maxlength="11"></p>
	</div>
	<div class="formgrup">	
		<label>Kolor:</label>
		<p>
			<select name="kolor">
				<option value="Brązowy">Brązowy</option>
				<option value="Cytrynowy">Cytrynowy</option>
				<option value="Czerwony">Czerwony</option>
				<option value="Niebieski">Niebieski</option>
				<option value="Turkusowy">Turkusowy</option>
				<option value="Zielony">Zielony</option>
				<option value="Złoty">Złoty</option>
				<option value="Żółty">Żółty</option>
			</select>
	<div class=".formgrup">
		<label>Data pierwszej rejestracji</label>
		<p><input type="date" name="DataRej" min="2005-01-17" max="2017-01-01"  required placeholder="rrrr-mm-dd"  class="form-grup"  required  title=""  maxlength="15"></p>
	</div>
		<label>Nr rejestracyjnego:</label>
	</div>
	<div class="formgrup">
		<p><input type="text"  class="form-grup" name="rejestracja" required placeholder="SO-6969" title="ABC-1234 lub AB-12345" pattern="[A-Z]{2,3}[0-9]{4,5}" maxlength="8"></p>
	</div>
	
	
		
		</div></center>
		</div>
		<div class="col-md-6">
		
			
	<div class="formgrup">	
		<label>Data Ubezpieczenie: </label>
	</div>
	<div class="formgrup">
		<p><input type="date"  min="2016-01-17" max="2017-01-01" class="form-grup" name="ubez" required placeholder="RRRR-MM-DD" title="Sprawdź czy podałęś w odpowiednim formacje RRRR-MM-DD " pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" maxlength="10"></p>
		<label>Nr VIN</label>
	</div>
	<div class="formgrup">
		<p><input type="text" class="form-grup" name="VIN" required placeholder="" title="" pattern="[0-9 A-Z ŻzŹźłŁĄąĘęóÓ]{17}" maxlength="17"></p>
		<label>Kaucja</label>
	</div>
	<div class="formgrup">
		<p><input type="text" class="form-grup" name="kaucja" required placeholder="" title="" pattern="[0-9]{2,4}" maxlength="4"></p>
		<label>Ilość</label>
	</div>
	<div class="formgrup">
		<p><input type ="text" class="form-grup" name="ilosc" required placeholder="" title="" pattern="[0-9]{1,2}" maxlength="2"></p>
	</div>
	<div class="formgrup">
		<label>cena za 1 dzień wyporzyczenia</label>
		<p><input type ="text" class="form-grup" name="cena" required placeholder="" title="" pattern="[0-9]{1,2}" maxlength="2"></p>
		
	</div>
		
		
	
	

		<br>
		<div>
		<p><input type ="submit" value="Dodaj" class="btn btn-primary" role="button">
		</div>
</form>
	</div>
	
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