
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="landon/theme/css/admin.css">
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>


    <?php
    $bd = new PDO('mysql:host=localhost;dbname=ubeer-mail;charset=utf8', 'root', 'user');
      if (isset($_POST['envoyer'])) {
        $mail = $_POST['mail'];
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
          $query = "INSERT INTO EmailAdresse (mail) VALUES ('$mail')";
          $bd-> query($query);
          header('location:one-page.php');
      } else {
        echo("$mail is not a valid email address");
      }
    }
    $resultat = $bd->query('SELECT * FROM EmailAdresse');
    ?>

    <?php
    echo '<table>';
    while ($donnees = $resultat->fetch())  {
    echo '<tr><td>';
    echo $donnees['mail'];
    echo '</td><td>';
    ?>
    
    <form action='admin.php' method ='POST'>
    <input type='checkbox' name='Delete' value='Delete'>

    <?php
    echo'</td></tr>';
    };
    echo '</table>';
    ?>

    <input type="submit" name="suppr" value="Supprimer">
    </form>

    <?php
    if(isset($_POST["Delete"])){
    $box=$_POST['suppr'];
    while(list($key,$val) = @each($box)){
    $bd->query("DELETE FROM ubeer-mail WHERE mail='$val'");
    header('location:admin.php');
      }
    }
    $resultat->closeCursor();
    ?>

  </body>
</html>
