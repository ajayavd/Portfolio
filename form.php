<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8">

<title>Contact Form</title>
<link rel="stylesheet" href="style.css">
</head> <body> 
	
<div id="db">	
<?php 
 $dbhost = 'localhost:3308';
 $dbuser = 'root';
 $dbpass = '';
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

 if(!$conn)
 {
	die('Could not connect:' .mysqli_error());
 }

	echo 'Database connected successfully';
	mysqli_close($conn);
?>

</div>

<div id="come">
	<div class="in">

<h2>Thank You For Response.</h2>

<h4>Here is the information you have submitted:</h4> 



<ol>


<li><em>Name:</em> <?php echo $_POST["name"]?></li>

<li><em>Email:</em> <?php echo $_POST["email"]?></li>

<li><em>Number:</em> <?php echo $_POST["number"]?></li>

<li><em>Message:</em> <?php echo $_POST["message"]?></li>

</ol> 
</div>


<div class = "fn">

<table>
	<tr>
		<td>
<?php
if(count($_COOKIE) > 0) {

echo "Cookies are enabled ";
echo count($_COOKIE);

} else {

echo "Cookies are disabled.";

}

?>
</td>



	<td>
<?php
session_start();
if (!isset($_SESSION['counter'])) {
$_SESSION['counter'] = 1;
} else {
$_SESSION['counter']++;
}
echo ("Page Views: ".$_SESSION['counter']);
?>
</td>

</tr>

</table>

</div>
</div>
</body> 
</html>