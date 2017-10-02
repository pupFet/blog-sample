<html>
<head>
<title>User Registration</title>

 <link rel="stylesheet" type="text/css" a href="{{ asset('/css/register.css') }}">
<!--  // <script type="text/javascript" src="/var/www/html/Larv/public/js/passerr.js"></script> -->
<script src="{{ asset('/js/passerr.js') }}"></script>
</head>
<body>

<h2 align="center">Sign Up Here!</h2>

<button onClick="document.getElementById('id01').style.display='block'" style="width:auto;">
<div align="center">Sign Up</div>
</button>

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
        <button type="button" onClick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button class="signupbtn" onclick="checkPass()">Sign Up</button>
      </div>
    </div>
  </form>
</div>




</body>
</html>