<?php
  /*Połączenie z bazą danych*/
  $dbhost = 'mysql1.ugu.pl'; 	
  $dblogin = 'db683956';
  $dbpass = 'qwerty11';
  $dbselect = 'db683956';
  mysql_connect($dbhost,$dblogin,$dbpass);
  mysql_select_db($dbselect) or die("Błąd przy wyborze bazy danych");
  mysql_query("SET CHARACTER SET UTF8");
?>