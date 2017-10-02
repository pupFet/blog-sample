<html>

<head>

<title>User Registration</title>

 <link rel="stylesheet" type="text/css" a href="{{ asset('/css/register.css') }}">

<!--  // <script type="text/javascript" src="/var/www/html/Larv/public/js/passerr.js"></script> -->

<script src="{{ asset('/js/passerr.js') }}"></script>

</head>

<style>

body{

}

table, th, td {

    border-collapse: collapse;

    background-color: #F0F0F0;

    width: 30%;

    text-align: left;

    border-radius: 25px;

}

table{

  box-shadow: 3px 3px 3px grey;

}

th {

    padding: 40px;

}

h1{

   font-family: "Courier"

}

table {

    border-spacing: 15px;

}

.button {

    background-color: #656565;

}

.button2 {

    background-color: #1C1C1C;

}

.cancelbtn{

  background-color: #656565;

}

.signupbtn{

  background-color: #1C1C1C;

}

.modal-content{

  border-radius: 15px;

  box-shadow: 5px 5px 5px grey;

  width: 50%;

}

</style>

<body>

<br><br><br><br></br></br></br></br>

<table align = "center">

  <tr>

    <th>

      <div align = "center">

      <h1><b>Welcome to our BLOG!</b></h1>

    </div>

    </td>

  </tr>

  <tr>

    <td>

  <div align = "center">

  <button class= "button" onClick="document.getElementById('id02').style.display='block'" style="width:350px">

  <div align="center">Log In</div>

  </button>

  </div>

</td></tr>

<tr>

  <td>

<div align = "center">

<button class= "button2" onClick="document.getElementById('id01').style.display='block'" style="width:350px">

<div align="center">Sign Up</div>

</button>

</div>

<div id="id01" class="modal" onclick="closeWindow()">

  <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>

  <form id="reg-form" class="modal-content animate" method="post" action="/create" >

    <div class="container">

        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

      <label><b>Last Name</b></label>

        <input type="text" placeholder="Enter Last Name" name="lastname" required>

      <label><b>First Name</b></label>

        <input type="text" placeholder="Enter First Name" name="firstname" required>

      <label><b>Username</b></label>

        <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>Password</b></label>

        <input type="password" placeholder="Enter Password" name="password" id="pass" required>

      <label><b>Repeat Password</b></label>

       <input type="password" placeholder="Repeat Password" name="psw-repeat" id="rep_pass" required>

      <div class="clearfix">

        <button type="button" onClick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="background-color:#656565">Cancel</button>

        <button class="signupbtn" onclick="checkPass()" style="background-color:#1C1C1C">Sign Up</button>

      </div>

    </div>

  </form>

</div>

<br></br>

</td>

</tr>

</table>

</body>

</htm