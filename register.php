<html>
  <head>
    <meta charset="utf-8" />
    <title>Quiz 2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
    <?php
      $vars = array('firstName', 'lastName', 'email');
      $bad_input = FALSE;
      foreach ($vars as &$var) {
        if (!isset($_POST[$var])) {
          $bad_input = TRUE;
        }
      }
      if ($bad_input) {
        echo "<p>Bad input</p>";
      }
      else {
        setcookie('firstName', $_POST['firstName']);
        setcookie('lastName', $_POST['lastName']);
        setcookie('email', $_POST['email']);
        echo "<p>You have been registered.</p>";
        echo '<p><a href="welcome.php">Go back to welcome page</a></p>';
      }
    ?>
  </body>
</html>
