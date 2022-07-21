<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
form {border: 3px solid #f1f1f1;}
* {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
.header {
    background:url(http://bloods-industries.co/wp-content/uploads/2016/12/Unsilenced-6.jpg);
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

h3{
  color: black;
}
h3{
  color: #63686e;
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

a{
    text-decoration: none;
    color: skyblue;
  }

input[type=text], input[type=password] {
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

button:hover {
    opacity: 0.8;
}



.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}


.container {
	margin-top:10px;
	margin-left: 10%;
	margin-right: 10%;
}

span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
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

<div class="header">
  <h1>Register</h1>
</div>


<div class="row">
  <div class="container">

  	<div>
        <h2>Create a ASA ID</h2>
        <p>If you already have a ASA ID, please <a href="login.php" class="cn">login here</a>.</p>
        <br>
    </div>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="email"><b>Gmail</b></label>
    <input type="text" placeholder="Enter Gmail" name="email" required>

    <label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter Phone" name="phone" required>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    
    <label for="repsw"><b>Re-Password</b></label>
    <input type="password" placeholder="Enter Password Again" name="repsw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <span class="psw">
    	<a href="register.php">Register</a>
    </span>
  </div>

</div>

<div class="footer">
  <img src="footer.png" width="100%" style="padding-left:35%;padding-right: 35%;">
</div>

</body>
</html>