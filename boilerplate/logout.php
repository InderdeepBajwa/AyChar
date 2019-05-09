<?php
  require __DIR__."./../partials/nav.php";
  session_unset();
  session_destroy();
  unset($_SESSION['UserToken']);
  header("Location: /jig");
 ?>