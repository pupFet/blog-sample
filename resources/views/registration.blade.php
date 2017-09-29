<html>

<head>

<title>Register New Account</title>

</head>
<body>

<h1 align="center">Register Account</h1>

<div align="center">

  <form id="reg-form" method="post" action="/create" >

    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <label for="lastName">Last Name: &nbsp;</label>
    <input type="text" id="lastName" name="lastname">
    <br>
    <label for="firstName"><br />
      First Name: &nbsp;</label>
    <input type="text" name="firstname" id="firstname" name="firstname" />
    <br ></br>
    <label for="username">
      Username: &nbsp;&nbsp; </label>
    <input type="text" name="username" id="username" name="username"/>
    <br>
    <label for="password"><br />
      Password: &nbsp;&nbsp;&nbsp;</label>
    <input type="password" name="password" id="password" name="password"/>
    <br><br>

    <input name="submit" type="submit" value="Submit" style="width:100px;height:40px;margin-left:90px;" />
</form>
</div>



</body>

</html>