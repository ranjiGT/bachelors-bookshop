<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<link rel="shortcut icon" href="icon.png" type="image/x-icon"><link rel="alternate" type="application/atom+xml" title="Gmail Atom Feed" href="feed/atom">

<body>
			<!-- start header -->
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
			<!-- end header -->
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Add to Cart</h1>
							<div class="success">
						
							<pre><?php
								//print_r($_SESSION);
							?></pre>
						
							<form action="paypal.php" method="POST">
							<table width="50%" border="0">
								<tr >
									<Td> <b>ID
									<select>
									<option value="">--select --</option>
  									<option value="001">001</option>
 									 <option value="002">002</option>
 									 <option value="003">003</option>
  									<option value="004">004</option>
									<option value="005">005</option>
									<option value="006">006</option>
									<option value="007">007</option>
									<option value="008">008</option>
								  	<option value="009">009</option>
									<option value="010">010</option>
									<option value="011">011</option>
									<option value="012">012</option>
									<option value="013">013</option>
									<option value="014">014</option>
									<option value="015">015</option>
									</select>
									<td> <b>Name
									<select>
									<option value=""></option>
									<option value="Microsoft Powershell Step by Step 3.0">Microsoft Powershell Step by Step 3.0</option>

									<td> <b>Qty
									<select>
									<option value="">--select--</option>
  									<option value="1">1</option>
 									 <option value="2">2</option>
 									 <option value="3">3</option>
  									<option value="4">4</option>
									<option value="5">5</option>
									<td> <b>ISBN
									<select>
									<option value=""></option>
									<option value="983645028">983645028</option>
									<td> <b>Price
									<select>
									<option value=""></option>
									<option value="$10">$10</option>
									
								</tr>
								<tr><td colspan="7"><hr style="border:5px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0 ;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="process_cart.php?id='.$id.'">Delete</a>
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							<input type="submit" value=" Check me out with PayPal" >
							</center>
							</form>
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								//include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
			<!-- end page -->
			
			<!-- start footer -->
			<div id="footer">
						<?php
							include("includes/footer.inc.php");
						?>
			</div>
			<!-- end footer -->
</body>
</html>
