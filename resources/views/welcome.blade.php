<html>
<head>
<style>
body {
    margin: 0;
    font-family: 'Lato', sans-serif;
    background-image: url("/img/bg.jpg");
    background-attachment: fixed;
    background-size: cover;
}
.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}
.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}
.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
    width: 100%;
}
.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}
.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}
@media screen and (max-height: 450px) {
  .overlay2 a {font-size: 20px}
  .overlay2 .closebtn2 {
    font-size: 40px;
    top: 15px;
  }
}
.overlay2 a:hover, .overlay2 a:focus {
    color: #f1f1f1;
}
.overlay2 .closebtn2 {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}
@media screen and (max-height: 450px) {
  .overlay2 a {font-size: 20px}
  .overlay2 .closebtn2 {
    font-size: 40px;
    top: 15px;
  }
}
.dropdown {
    position: relative;
    display: inline-block;
}
.dropdownname{
  border: none;
  width:auto;
  cursor: pointer;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #C3C3C3;
    min-width: 300px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 15px;

}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    width: 250px;
}
.dropdown-content a:hover {
   background-color: #6C6C6C;
   width: 150px;
}
.dropdown:hover .dropdown-content {
    display: block;
    width: 150px;

}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 15px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
input[type=text]:focus {
    width: 60%;
}
</style>
</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <div>
      <a href="http://127.0.0.1:8000">home</a>
    </div>
    <div>
      <a href="#">blogs</a>
    </div>
    <div class="dropdown">
      <a class="dropdownname">account</a>
        <div class="dropdown-content"align="center">
          <a href="{{ route('login') }}">Login</a>
          <a href="{{ route('register') }}">Register</a>
        </div>
    </div>
    <div>
    <a href="#">about us</a>
    </div>
  </div>
</div>

<div id="myNav2" class="overlay"align="right">
  <a href="javascript:void(0)" class="closebtn2" onclick="closeNav2()">&times;</a>
  <div class="overlay-content2"align="center">
    <div>
      <form>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <input type="text" name="search" placeholder="Search..">
      </form>
    </div>
    </div>
  </div>

<br></br>
<div align="right">
<span style="font-size:50px;cursor:pointer" onclick="openNav()"><b>&#9776;&nbsp;&nbsp;</b></span>
<br></br>
<span style="font-size:50px;cursor:pointer" onclick="openNav2()"><img src="/img/search.png" height="50px"width="50px">&nbsp;&nbsp;
</span>

</div>
<div align="center">
  <img src="/img/logo.png"width="350px"height="auto">
</div>

<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

function openNav2() {
    document.getElementById("myNav2").style.width = "100%";
}

function closeNav2() {
    document.getElementById("myNav2").style.width = "0%";
}

</script>

</body>
</html>
