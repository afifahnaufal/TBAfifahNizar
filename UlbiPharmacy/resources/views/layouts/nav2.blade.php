<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ULBI PHARMACY</title>
    <link rel="stylesheet" href="css/dashboardtable.css">
    <link rel="stylesheet" href="css/buttonlogin.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <nav>
        <div class="wrapper" id="wrapper">
          <img src="/image/ulbii.png" width="130px" height="60px" class="ulbi">
          <ul class="nav-links">
            <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
            <li><a href="/index">Home</a></li>
            <li><a onclick="scrollToDiv()">About</a></li>
            <li>
              <a href="#" class="desktop-item">Services</a>
              <input type="checkbox" id="showDrop">
              <label for="showDrop" class="mobile-item">Dropdown Menu</label>
              <ul class="drop-menu">
                <li><a href="dashboardtable">Consultation</a></li>
                <li><a href="/medicine">Medicine</a></li>
                <li><a href="/dokter">Dokter</a></li>
              </ul>
            </li>
            <li>
              <a onclick="scrollToDiv2()" class="desktop-item">Contact us</a>
            </li>
            <li>
                <a href="/login">
                    <button class="button_login">
                        LOGIN
                    </button>
                </a>
            </li>
          </ul>
          <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
      </nav>
      @yield('container')