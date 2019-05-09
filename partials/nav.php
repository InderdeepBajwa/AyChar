<?php
  require('head.php');
  require_once $_SERVER['DOCUMENT_ROOT'] . '/jig/dbase/dbfunctions.php'
?>

<ul>
  <li><a href="/jig">Finance Management</a></li>
  <li><a class="right-align" href="/jig/pages/contact.php">Contact</a></li>
  <li><a class="right-align" href="/jig/pages/about.php">About</a></li>
  <?php
    if(isset($_SESSION['UserToken'])) { ?>
        <li><a class="right-align" href="/jig/boilerplate/logout.php">Logout</a></li>
    <?php } else {
        ?><li><a class="right-align" href="/jig/pages/login.php">Login</a></li>
    <?php }
  ?>
</ul>


