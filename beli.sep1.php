<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
* {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
input[type=text]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}
.header {
    background:url(http://stilifecreative.com/wp-content/uploads/2012/01/93.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    padding: 50px;
    text-align: center;
    color: white;
    font-size: 50px;
    height: 350px;
}
h3{
  color: black;
}
h3{
  color: #63686e;
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


.content {
    background-color: #ddd;
    padding: 10px;
    height: 200px; 
}
.leftcolumn {   
    float: left;
    width: 35%;
    padding-left: 100px;
    padding-top: 50px;
    text-align: left;
}


.rightcolumn {
    float: left;
    width: 65%;
    padding-top: 50px;
    padding-right: 100px;
}
a{
    text-decoration: none;
    color: black;
  }

.row:after {
    content: "";
    display: table;
    clear: both;
}
.divimg a:hover{
    color: #888888;
}

.imgmid {
      display: block;
      margin-left: auto;
      margin-right: 90px;
      width:55%;
      height:55%;
  }

footer {
    background-color: #f1f1f1;
    padding: 10px;
    border-top:5px; 
    color: black;
}
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


<div class="row">
  <div class="leftcolumn">
    <div class="container">
    <label ><b>Nama</b></label>
    <input type="text" >
    <label ><b>Alamat</b></label>
    <input type="text" >
    <label ><b>No HP</b></label>
    <input type="text" >
    <label ><b>Gmail</b></label>
    <input type="text" >
    <label ><b>Size</b></label>
    <input type="text" >
    <button type="submit">Submit</button>
    <label>
      <input type="checkbox" checked="checked" name="remember">
    </label>
    </div>
  </div>

  <div class="rightcolumn">
    <div class="divimg">
      <div> 
        <img src="sepatu/sep1.jpg" class="imgmid">
      </a>
      </div>
    </div>
  </div>
  
<div class="footer">
  <hr>
  <img src="footer.png" width="100%" style="padding-left:35%;padding-right: 35%;">
</div>


</body>
</html>