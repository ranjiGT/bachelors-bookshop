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
							<h1 class="title"></h1>
							<div class="entry">
							
								<table  align="center" width="100%">
										<tr  bgcolor="#EEE9F3">
										
										
									<td align="center" width="100%"><b>Development And Management Team</b></td>
										</tr>
										
										<tr><td><br><br></td></tr>
								<tr>
									<td >
												<strong><font color="#433" size="2">Information about developers:</font></strong><br><br>
														<U><B>Ranji Raj Nair   :</B></U><BR><br>
														<UL>
														<LI>Mobile No.<font color="blue">  +91 9870794639</font></LI>
														</UL>
														<U><B>Shabareesh Varma</B></U><BR>		<br>		
														<UL>
														<LI>Mobile No.<font color="blue">  + 91 8866270886</font></LI>
														</UL>
												</strong>										
											<center><strong>Contact Us :</strong><font color="purple">+91 9925171871</font></center><br><br>						
												The Languages used in BookShop.com project&nbsp;:<font color="lime">PHP, MYSQL, HTML, JAVASCRIPT, BOOTSTRAP</font> 
									</td>
								</tr>
								</table>
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
