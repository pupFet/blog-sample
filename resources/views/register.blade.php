<html>
<head>
<title>User Registration</title>
<style>

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: 	#1569C7;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #FF5050;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:left;width:50%}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
 
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