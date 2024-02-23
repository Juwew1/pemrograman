<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OnMart Admin</title>
  <link rel="shortcut icon" href="../../icon.svg" type="image/x-icon">
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }


    .container {
      margin: 5px;
      padding: 5px;
    }

    div.leftBar {
      background-color: #525552;
      color: whitesmoke;
      width: 15%;
      float: left;
      display: inline;
    }

    h1.headerNavbar {
      font-size: 32px;
      text-align: center;
      margin: 10px;
    }

    div.profile {
      margin: 15px 0;
      text-align: center;
      width: 100%;
    }

    div.imgProfile img {
      background-color: white;
      border: 1px solid white;
      border-radius: 100%;
      width: 50px;
      height: 50px;
    }

    div.navbar {
      text-align: center;
      margin: 15px 0;
    }

    div.navbar ul.nav li {
      padding: 5px;
    }

    div.navbar ul.nav a {
      color: white;
      text-decoration: none;
    }

    div.navbar ul.nav a:hover {
      color: lightcoral;
      font-size: 20px;
      text-decoration: none;
    }

    div#window {
      width: 100%;
      height: 100%;
    }

    div.main {
      background-color: floralwhite;
      width: 85%;
      float: right;
      display: inline;
    }

    div.card {
      background-color: skyblue;
      border-radius: 5%;
      margin-left: 4%;
      margin-top: 25px;
      width: 20%;
      float: left;
      display: inline;
    }

    div.headerCard {
      font-size: 30px;
      text-align: center;
      margin: 15px 0;
    }

    div.imgCard img {
      margin: 20px;
      width: 85px;
      height: 75px;
      float: left;
      display: inline;
    }

    div.count {
      font-size: 60px;
      float: right;
      display: inline;
      margin: 15px;
    }
  </style>
</head>
<body>
<div id="window">
  <div class="leftBar">
    <h1 class="headerNavbar">OnMart</h1>
    <hr>
    <div class="profile">
      <div class="imgProfile">
        <img src="../../img/user.890x1024.png" alt="user">
        <p>Name</p>
      </div>
    </div>
    <hr>
    <div class="navbar">
      <ul class="nav">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </div>
  <div class="main">
    <div class="container">
      <h1>Dashboard</h1>
      <hr>
      <div class="dashboard">
        <div class="card">
          <div class="headerCard">Total Products</div>
          <hr>
          <div class="imgCard">
            <img src="../../img/ad-product.1024x1024.png" alt="products">
          </div>
          <div class="count">0K</div>
        </div>
        <div class="card">
          <div class="headerCard">Total Customers</div>
          <hr>
          <div class="imgCard">
            <img src="../../img/users.1024x717.png" alt="customers">
          </div>
          <div class="count">0M</div>
        </div>
        <div class="card">
          <div class="headerCard">Total Orders</div>
          <hr>
          <div class="imgCard">
            <img src="../../img/shopping-cart.1024x922.png" alt="orders">
          </div>
          <div class="count">0K</div>
        </div>
        <div class="card">
          <div class="headerCard">Total Sales</div>
          <hr>
          <div class="imgCard">
            <img src="../../img/credit-card.1024x769.png" alt="sales">
          </div>
          <div class="count">0K</div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
