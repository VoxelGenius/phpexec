
<!DOCTYPE html>
<html>
<head>
	<title>Hello using PHP!</title>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
</head>
<body>
<style type="text/css">
h1 {
	text-align: center;
	font-family: 'Inconsolata', monospace;
	
}
.echo {
	text-align: center;
	font-size: 20px;
	letter-spacing: 3px;
	font-family: 'Inconsolata', monospace;
}
img {

	display: block;
	margin-top: 20px;
	margin-left: auto;
  	margin-right: auto;
	width: 200px;
	height: 200px;
	
}
.network {

	float: left;
	font-size: 15px;
	font-weight: bold;
	font-family: 'Inconsolata', monospace;
}
}
</style>
<h1>In the Immortal words of Spongebob:</h1>
<img src="Spongebob.jpg">
<p class="echo"><?php echo "HeLlO wOrLd";?></p>
<p class="network"> Network status: <br /></p>
<p><?php 
print "<br />";
print "<br /><br />";
$servername = "localhost";
$username = "username";
$password = "1234";
$db = "db_tochukwu";



$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else {
	echo "Connected successfully";
}



?></p>
</body>
</html>


