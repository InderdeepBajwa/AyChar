<?php

    // navbar
    require('../partials/nav.php');

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  font: Arial;
  width: 60%;
  margin: auto auto;
}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 20px;
  color: gray;
  border: 3px solid #079992;
  border-radius: 6px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 22px;
  resize: vertical;
}

input[type=submit] {
  background-color: #079992;
  color: white;
  padding: 15px 25px;
  border: none;
  border-radius: 4px;
  opacity: 0.5;
  transition: 0.3s;
  cursor: pointer;
}
submit:hover {opacity: 1}
input[type=submit]:hover {
  background-color: #f2f2f2;
}

.container {
  border-radius: 5px;
  color: #079992;
  background-color: #f2f2f2;
  padding: 30px;
}

</style>
<head>
<body>



<div class="container">
  <form action="" method="post">
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="fullname" placeholder="Your full name">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email">

    <label for="depart">Department</label>
    <select id="depart" name="regarding">
      <option value="rnd">Research and Development</option>
      <option value="marketing">Marketing </option>
      <option value="anf">Accounting and Finance</option>
      <option value="prod">Production</option>
      <option value="purch">Purchasing</option>
    </select>


    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Thank you for reaching out!" style="height:200px"></textarea>


  <input type="submit" value="Submit">

  </form>
</div>
  <button class="submit"</button>
</body>
</html>
