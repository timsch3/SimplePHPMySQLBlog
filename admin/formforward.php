<?php
  if (isset($_POST['password'])) {
      if ($_POST['password'] == '*****') {
          if (!session_id())
              session_start();
          $_SESSION['logged_in'] = true;

          header('Location: formforward2.php');
          die();
      } else {
        header('Location: index.php');
        die();
    }
    }
?>