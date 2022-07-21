<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-6.9107518,107.6170519,15),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("mainstore"), propertiPeta);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-6.1823118,106.8013593,13),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("jakartastore"), propertiPeta);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-7.2601576,112.7438698,14.54),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("surabayastore"), propertiPeta);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
</script>
<style>
* {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
    padding-left: 10px;
    padding-top: 50px;
    padding-right: 90px;
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

<div class="header">
  <h1>Store Location</h1>
</div>


<div class="row">
  <div class="leftcolumn">
    <h2>Main Store</h2>
    <h3>JL.Raya Mars No.7 Bandung Jawa Barat Indonesia </h3>
  </div>
  <div class="rightcolumn">
    <div id="mainstore" style="height:200px;"></div>
  </div>
  
  <div class="leftcolumn">
    <h2>Jakarta Store</h2>
    <h3>JL.Raya JupiterZ No.666 Jakarta Pusat DKI Jakarta Indonesia </h3>
  </div>
  <div class="rightcolumn">
    <div id="jakartastore" style="height:200px;"></div>
  </div>

  <div class="leftcolumn">
    <h2>Surabaya Store</h2>
    <h3>JL.Raya Pelutoo No.00 Surabaya Jawa Timur Indonesia </h3>
  </div>
  <div class="rightcolumn">
    <div id="surabayastore" style="height:200px;"></div>
  </div>
</div>

<div class="footer">
  <img src="footer.png" width="100%" style="padding-left:35%;padding-right: 35%;">
</div>


</body>
</html>