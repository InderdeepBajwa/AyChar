<?php require __DIR__.'./sidebar.php' ?>
<?php require __DIR__.'../../dbase/dbfunctions.php' ?>

<?php


    //$updateUserName = runSafeQuery("SELECT name FROM employees", []);
    $someVar = "";
    
 
 ?>


<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px;
  margin-left: 25%;
  margin-right: 25%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  color: #079992;
  clear: both;
}
.settings{
 width: 50%;
 margin: auto auto;
}

input[type=submit] {
  background-color: #079992;
  color: white;
  padding: 15px 25px;
  border: none;
  border-radius: 4px;
  opacity: 0.5;
  transition: 0.3s;
  margin-left: 44%;
  margin-top: 10%;
}

</style>

<script>
function getNewUserName() {
  var txt;
  var person = prompt("Please change your name:", "");
  if (person == null || person == "") {
    txt = "User cancelled the prompt.";

  } else {
    txt = person + "you have changed your name";
    

   
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

<div id ="main">
<div class="settings">
  <div>
    <h2>Settings</h2>
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Change your name</h2>
    <p>Enter your name and click "Edit" to make your first name different</p>
    <form action="/jig/boilerplate/form-validate/updateF_name.php" method="post">
      <input type="text" name="first_name" placeholder="Name">
      <input type="submit" name="submit" text="nbnb">
    </form>
  </div>
</div>
</div>
