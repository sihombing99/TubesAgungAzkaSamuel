<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
    overflow: hidden;
    background-color: #000000;
    height: 80px;   
}
.topnav a {
    float: right;
    display: block;
    color: #f2f2f2;
    text-align: center;
    margin-top: 18px;
    padding: 14px 16px;
    text-decoration: none;
    height: 60px;
}
.topnav a:hover {
    background-color: #ddd;
    color: black;
    height: 60px;
}

.divisia{
  text-align: center;
  display: block;
  background-color: #ffffff;
  color: #999999;
}
.divisia:hover{
  color: #000000;
}

.divimg {
    padding-bottom: 30px;
    width: 25%;
    float: left;
    background-color: white;
  }
.divimg a:hover{
    color: #888888;
}

.imgmid {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width:150px;
      height:150px;
  }
a{
    text-decoration: none;
    color: black;
  }
.divtext{
    margin-left:25%;
    width: 50%;
}

.footer {
    background-color: #f1f1f1;
    padding: 10px;
    border-top:solid 5px; 
    color: black;
}


</style>
</head>
<body>

<div class="topnav">
  <img src="arms.png" style="width:95px;height:50px; margin:1.2%;" usemap="home">
  <map name="home">
  <area shape="rect" coords="0,0,450,450" alt="Computer" href="home.php">
  </map>
  <a href="login.php">LOGIN</a>
  <a href="about.php">ABOUT US</a>
  <a href="store location.php">STORE</a>
  <a href="shop.php">SHOP</a>
  <a href="home.php">HOME</a>
</div>

<video width="100%" autoplay controls>
  <source src="sepatu.mp4" type="video/mp4">
</video>

<div>
<h2 text align="center">
•••  FEATURE  •••
</h2>
<p text align="center" style="font-size: 12px; margin-top: 5px;">
  NEW BRAND FOR YOU
</p>
     <div class="divimg">
      <div>
      <a href="beli.sep1.php"> 
        <img src="sepatu/sep1.jpg" class="imgmid">
      </a>
      </div>
      <div class="divtext">
      <a href="beli.sep1.php">
      </a>
      <hr>
      IDR 140000
      </div>
    </div>

    <div class="divimg">
      <div>
      <a href="beli.sep2.php"> 
        <img src="sepatu/sep2.jpg" class="imgmid">
      </a>
      </div>
      <div class="divtext">
      <a href="beli.sep2.php">
      </a>
      <hr>
      IDR 140000
      </div>
    </div>

    <div class="divimg">
      <div>
      <a href="beli.sep3.php"> 
        <img src="sepatu/sep3.jpg" class="imgmid">
      </a>
      </div>
      <div class="divtext">
      <a href="beli.sep3.php">
      </a>
      <hr>
      IDR 140000
      </div>
    </div>

    <div class="divimg">
      <div>
      <a href="beli.sep4.php"> 
        <img src="sepatu/sep4.jpg" class="imgmid">
      </a>
      </div>
      <div class="divtext">
      <a href="beli.sep4.php">
      </a>
      <hr>
      IDR 140000
      </div>
    </div>
<a class="divisia">SEE MORE</a>
</div>

<div class="footer">
  <img src="footer.png" width="50%" style="padding-left: 26%;">
</div>

</body>
</html>

