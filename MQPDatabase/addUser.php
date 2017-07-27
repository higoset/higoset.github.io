<? php
  //Configuration
  $db = mysql_connect('mysql.wpi.edu', 'ejcerini', '.57ZHK') or die('Could not connect: ' . mysql_error());
  mysql_select_db('userdatabase_erik') or die('Could not select database');

  // Strings must be escaped to prevent SQL injection attack.
  $name = mysql_real_escape_string($_GET['name'], $db);
  $pass = mysql_real_escape_string($_GET['pass'], $db);
  $salt = mysql_real_escape_string($_GET['salt'], $db);

  echo '<h1>Connected</h1>'
 ?>
