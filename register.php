<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("includes/head.inc.php");
?>
</head>
<link rel="shortcut icon" href="icon.png" type="image/x-icon"><link rel="alternate" type="application/atom+xml" title="Gmail Atom Feed" href="feed/atom">

<body>

<div id="header">
<div id="menu">
<?php
include("includes/menu.inc.php");
?>
</div>
</div>

<div id="logo-wrap">
<div id="logo">
<?php
include("includes/logo.inc.php");
?>
</div>
</div>
			

<div id="page">
<div id="content">
<div class="post">
<h1 class="title">Welcome to Registeration</h1>
						
<div class="entry">
<br><br>
<?php
if(isset($_GET['error']))
{
echo '<font color="red">'.$_GET['error'].'</font>';
echo '<br><br>';
$message = "Cannot Validate :(";
echo "<script type='text/javascript'>alert('$message');</script>";
}
											
if(isset($_GET['ok']))
{
echo '<font color="blue">You are successfully Registered..</font>';
echo '<br><br>';
}
?>
									
<table>
<form action="process_register.php" method="POST">
<tr>
<td><b>Full Name :</b>&nbsp;&nbsp;</td>
<td><input type='text' size="30" maxlength="30" name='fnm'></td>
												
</tr>
												
<tr><td>&nbsp;</tr>
												
<tr>
<td><b>User Name :</b>&nbsp;&nbsp;</td>
 <td><input type='text' size="30" maxlength="30" name='unm'></td>
<td>&nbsp;</td>
													
</tr>
												
<tr><td>&nbsp;</tr>
												
<tr>
<td><b>Password :</b>&nbsp;&nbsp;</td>
<td><input type='password' name='pwd' size="30"></td>
													 
</tr>
												
<tr><td>&nbsp;</tr>
												
<tr>
<td><b>Confirm Password:</b>&nbsp;&nbsp;</td>
<td><input type='password' name='cpwd' size="30"></td>
													
</tr>
												
<tr><td>&nbsp;</tr>
																								
<tr><td>&nbsp;</tr>
																				
<tr>
<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
<td><input type='text' name='mail' size="30"></td>
													
</tr>
												
<tr><td>&nbsp;</tr>
												
<tr>
<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
<td><input type='text' name='contact' size="30"></td>
													
</tr>
												
<tr><td>&nbsp;</tr>
												
												
<tr>
<td><b>City:</b>&nbsp;&nbsp;</td>
<td>
<select style="width: 195px;" name="city">
														
<option>Ahmedabad
<option>Bihar
<option>Jamnagar
<option>Rajkot
<option>Porbandar
<option>Anand
<option>Surat
<option>Surendranagar
<option>Jamnagar
<option>Junagadh
<option>Amreli
<option>Maharashtra				
<option>Bhavnagar
<option>Mehsana
															
														
</select>
												
</tr>
												
<tr><td>&nbsp;</tr>
												
												
												
<tr>
<td colspan='2' align='center'>
<input type='submit' value="  Register  ">
</td>
</tr>
</form>
</table>
</div>
									
</div>
					
					
</div>
				
						
<div id="sidebar">
<?php
//include("includes/search.inc.php");
?>
</div>
					
<div style="clear: both;">&nbsp;</div>
</div>
			
			
			
<div id="footer">
<?php
include("includes/footer.inc.php");
?>
</div>
			
</body>
</html>
