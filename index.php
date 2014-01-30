
<!DOCTYPE html> 
<html> 
	<head> 
	<title>MIS EEPIS</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="include/jquery.mobile-1.3.2.min.css"/>
        <link rel="stylesheet" href="include/themes/tema.css"/>
        <link rel="stylesheet" href="include/table.css"/>
        <script type="text/javascript" charset="utf-8" src="cordova.js"></script>
           <script src="include/jquery-1.10.2.min.js"></script>
	<script src="include/jquery.mobile-1.3.2.min.js"></script>
<?php
include 'arsip-json.php';
 include 'json_jadwal.php';
 ?>
        </head> 
<body> 

<div id="login" data-role="page">

    <div data-role="header" data-theme="c" style="border-style:none"> 
   <img border="0" src="include/gambar/LOGO1.jpg" alt="mis logo" height="10%" width="100%"/>   
    </div><!-- /header -->
	<div data-role="content">			
	<form action="menu.php" method="post">
  <div data-role="fieldcontain" >
    <label for="username">Username:</label>
    <input type="text" name="username" id="uname">
    </div>
    
    
    <div data-role="fieldcontain" >
    <label for="password">Password:</label>
    <input type="password" name="password" id="paswsword">
    </div>
	<input data-mini="true"  type="submit" value="Login" data-theme="c" ">
	</form>
    </div><!-- /content -->
	
</div>
<!-- /page -->
</body>
</html>
