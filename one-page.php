<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OnePage</title>
  </head>
  <body>
<?php
try
{
	$bd = new PDO('mysql:host=localhost;dbname=ubeer-mail;charset=utf8', 'root', 'user');
}
catch(Exception $e)
{

        die('Erreur : '.$e->getMessage());
}
 ?>
    <form action="admin.php" method="POST">
      <input type="text" name="mail" value="">
      <input type="submit" name="envoyer" value="">
    </form>
  </body>
</html>
