<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("includes/head.inc.php");
?>
</head>
<link rel="shortcut icon" href="icon.png" type="image/x-icon"><link rel="alternate" type="application/atom+xml" title="Gmail Atom Feed" href="feed/atom">

<body bgcolor="#E6E7FA">
			
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
<h1 class="title">Welcome to 
<?php 
if(isset($_SESSION['status']))
{
echo $_SESSION['unm']; 
}
else
{	
echo 'Book Shop';
}
?>
</h1>
<div class="entry">
<br>
<p>
The Bookshop is a venture of WebTech Inc. <a href="developer.php"><font color="purple">Ranji & Sons'</font></a> founded
Webtech Inc. over a decade ago and today it is a leading on-line
marketplace solution for the consumer products and business-to-consumer
categories.

WebTech has operated primarily in the online book market and has 
successfully transformed in an enterprise comprising of an Online
Division, Wholesale Division and Retail Division. WebTech has grown from
a company of one man with a vision to an enterprise poised to redefine
the online marketplace for books, other consumer products and beyond. 
WebTech is currently New in marketplace sellers but due to its dynamic 
and proprietary pricing engine, fulfillment, distribution, inventory 
assortment and depth, value pricing and management team It is growing
consistantly.
								
</p>
<br>		
								
<object width="550" height="400">
								
<embed src="HotHotSoftware3DMenu.swf" width="550" height="400">
</embed>
</object>
<br><br>
<p>
The Bookshop.com was started as an on-line bookseller for consumers in the
INDIA. Currently The Bookshop.com, the INDIA website, operates in the 
consumer trade and the mass-market book trade. The Bookshop Books.com has
positioned itself as a leader in book assortment, inventory depth, 
fulfillment, distribution and value pricing.
								
It boasts over 1 million titles from leading publishers and distributors.
Every title in the The Bookworld Books.com assortment is priced utilizing
The Bookshop Books' dynamic and proprietary pricing engine, which enables 
The Bookshop Books.com to aggressively discount prices while maintaining competitive gross margins.

</p>
</div>
							
</div>
						
</div>
					
					
					
<div id="sidebar">
<?php
include("includes/search.inc.php");
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
