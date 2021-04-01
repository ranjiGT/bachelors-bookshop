<?php
if(isset($_POST['user_name']))
{
 session_start();
 $_SESSION['name']=$_POST['user_name'];

header("location: profile.php");
}
?>
<?php
if(isset($_GET['error']))
{
echo '<font color="red">'.$_GET['error'].'</font>';
echo '<br><br>';
$message = "Cannot Validate :(";
echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<html>
<head>
<title></title>
</head>
<link rel="shortcut icon" href="icon.png" type="image/x-icon"><link rel="alternate" type="application/atom+xml" title="Gmail Atom Feed" href="feed/atom">
<body>
<form action="" method="post" id="main_form">
<input type="text" name="user_name" size="40"><br />
<input type="submit" value="Process in">                            
</form><br><br>                       
</body>
</html>