@extends('layouts.app')
<html>
<head><title>Blog Contents</title>
<script src="{{ asset('/js/navFunc.js') }}"></script>
<link rel="stylesheet" type="text/css" a href="{{ asset('/css/NavSide.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
@section('content')
<div id="mySidenav" class="sidenav">
  <a href="{{ url('/') }}" align="center"><i class="material-icons HomeBtn">home</i></a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <p align="center">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</p>
  <ul>
  <li><a href="#"><p class="ListFonts">Profile</p></a></li>
  <li><a href="#"><p class="ListFonts">Create a new blog</p></a></li>
  <li><a href="#"><p class="ListFonts">About Us</p></a></li>
  <li>
    <a href="{{ route('logout') }}"
     onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">
     <p class="ListFonts">Logout</p></a></li>
       </a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         {{ csrf_field() }}
    </form>
</ul>
</div>

<!-- Use any element to open the sidenav -->
<div class="showButton">
<span onclick="openNav()"><i class="material-icons shoW_bar_icon">chevron_right</i></span>
</div>
<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main" class="pageContent">

<h1>Welcome!: "{{ Auth::user()->username }}"</h1>
</div> 
@endsection
</body>

</html>