<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <script src="{{ asset('js/profile.js') }}"></script>
  <link rel="stylesheet" type="text/css" a href="{{ asset('/css/profile.css') }}">
</head>
<body>
<div class="bg"></div>
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<li><a href="/home"><p class="ListFonts">Home</p></a></li>
<li><a href="#"><p class="ListFonts">Settings</p></a></li>
<li><a href="#"><p class="ListFonts">About Us</p></a></li>
</div>

<!-- Use any element to open the sidenav -->
<div class="padding">
<span onclick="openNav()"><a class="rightArrow">Menu</a></span>
</div>
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main" class="profile">
  <h2>Your Blogs</h2>
  <!-- Portfolio Gallery Grid -->
  <div class="row">
    <div class="column">
      <div class="content">
        <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
        <a href="#" class="mywork"><h3>My Work</h3></a>
        <p>Hey, diddle, diddle, The cat and the fiddle, The cow jumped over the moon; The little dog laughed To see such sport, And the dish ran away with the spoon.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
      <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
        <a href="#" class="mywork"><h3>My Blog 2</h3></a>
        <p>Hey, diddle, diddle, The cat and the fiddle, The cow jumped over the moon; The little dog laughed To see such sport, And the dish ran away with the spoon.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
      <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
        <a href="#" class="mywork"><h3>My Blog 3</h3></a>
        <p>Hey, diddle, diddle, The cat and the fiddle, The cow jumped over the moon; The little dog laughed To see such sport, And the dish ran away with the spoon.</p>
      </div>
    </div>
    <div class="column">
      <div class="content">
      <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
        <a href="#" class="mywork"><h3>My Blog 4</h3></a>
        <p>Hey, diddle, diddle, The cat and the fiddle, The cow jumped over the moon; The little dog laughed To see such sport, And the dish ran away with the spoon.</p>
      </div>
    </div>
  <!-- END GRID -->
  </div>

  <div class="content">
    <img src="/w3images/p3.jpg" alt="Bear" style="width:100%">
    <a href="#" class="mywork"><h3>Some Other Work</h3></a>
    <p>Hey, diddle, diddle, The cat and the fiddle, The cow jumped over the moon; The little dog laughed To see such sport, And the dish ran away with the spoon.</p>
    <p>Hey, diddle, diddle, The cat and the fiddle, The cow jumped over the moon; The little dog laughed To see such sport, And the dish ran away with the spoon.</p>
  </div>

  <!-- END MAIN -->
  </div>

</div>
</body>
</html>
