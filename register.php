<html>
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
