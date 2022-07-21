<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
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

.footer {
    background-color: #f1f1f1;
    padding: 10px;
    border-top:solid 5px; 
    color: black;
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

.divtext{
    margin-left:25%;
    width: 50%;
}
</style>
<body>

<div class="topnav">
  <img src="arms.png" style="width:95px;height:50px; margin:1.2%;" usemap="home">
  <map name="home">
  <area shape="rect" coords="0,0,450,450" alt="Computer" href="home.php">
  </map>
  <a href="shoes.php">SHOES</a>
  <a href="t-shirt.php">T-SHIRT</a>
</div>
<img src="slide1.jpg" style="width: 100%; margin-top: 5px; margin-bottom: 5px;">

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
      <a href="baju.kem-2.php"> 
        <img src="kemeja/kem-2.jpg" class="imgmid">
      </a>
      </div>
      <div class="divtext">
      <hr>
      IDR 140000
      </div>
    </div>

    <div class="divimg">
      <div>
      <a href="baju.kem-4.php"> 
        <img src="kemeja/kem-4.jpg" class="imgmid">
      </a>
      </div>
      <div class="divtext">
      <a href="beli.sep4.php"
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