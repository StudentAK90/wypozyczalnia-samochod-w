<?php
session_start();

$db = require_once('db.php');

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


	<title>AutoExpres - Rejestracaj</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script language="javascript" type="text/javascript" src="ajax.js"></script>
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
		<li><a href="faktury.php" >Faktury</a></li>
		</ul>
		
		
	</div>
		<a href="Rozlicz.php" role="button" class="btn btn-default"  >Rozlicz</a>
	
	
		<a href="wydaj.php" role="button" class=" btn btn-default" >Wydaj Samochód</a>
	</div>
 
<div class="contener-fluid text-right ">

<div class="navbar-heder .navbar-form navbar-inverse navbar-right" style="padding-right:20px">


		
   
  
   
</div>
<div class="contener-fluid text-right ">

<div class="navbar-heder .navbar-form navbar-inverse navbar-right" style="padding-right:20px">




	
	
  </div>
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

  <script>
	
	alert('UWAGA. Sprawdź dane  wyporzyczającego');
	</script>
	
  <div class ="container-fluid" >

    <div class="contener" >


  <div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	
	
	<?php
	
	if (!mysql_select_db("wyp4")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

$
	
	
	
	
	
	$sql = ('SELECT * FROM klient');
	$wynik = mysql_query($sql);
	$error = mysql_error();
	while ($row = mysql_fetch_assoc($result)) {
	echo $row["id_klient"];
    echo $row["imie"];
    echo $row["nazwisko"];
    echo $row["ulica"];
	echo $row["miasto"];
	echo $row["kod_pocztowy"];
	echo $row["nr_tel"];
	echo $row["nr_konta_bank"];
	echo $row["PESEL"];
	
	exit;
	}
	?>
	
	
	
	<form>
	<div class=".formgrup">
		<table width="300" border="0">
          <tr>
            <td width="200">
		<?php
		echo"<select name=\"mid\" onchange=\"ajaxfunction2()\" id=\mid\" witch=\"25\>"
		."<option value=\"\">--wybierz--</option>";
		$result2 = mysql_query("SELECT imie, nazwisko FROM klient ORDER BY klient");
		while ($row = mysql_fetch_array($result2)){
			$mid = intval($row['imie']);
			$marka =$row['klient'];
			echo"<option value=\"".$mid."\">">$marka."</option>";
		}
		echo"</select>"
		?>
		 </td>
		    <td width="100">
      <div id='ajaxDiv'></div>
      </td>
              
          </td>
          </tr>
		 
        </table>
	</diV>
	</form>
	<br></br>
	<br></br>
	<br></br>
	<form>
		</div>
			<div class=".formgrup">
        <table width="300" border="0">
          <tr>
            <td width="200">
          <?php
       
        echo "<select name=\"mid\" onchange=\"ajaxFunction()\" id=\"mid\" width=\"25\">"
        ."<option value=\"\">--wybierz--</option>";
        $result2 = mysql_query("SELECT id, marka FROM marki ORDER BY marka");
        while ($row = mysql_fetch_array($result2)) {
          $mid = intval($row['id']);
          $marka = $row['marka'];
          echo"<option value=\"".$mid."\">".$marka."</option>";
        }
        echo"</select><br>";
      ?>
          </td>
		    <td width="100">
      <div id='ajaxDiv'></div>
      </td>
              
          </td>
          </tr>
		 
        </table>
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