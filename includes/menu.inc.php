<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<!--<li><a href="register.php">Register</a></li>-->
			<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php">Logout</a></li>';
					}
					else
					{
						echo '<li><a href="register.php">Register</a></li>';
					}
			?>
			
			
			<li class="last"><a href="contact.php">Contact</a></li>
			<li class="last"><a href="aboutus.php">About Us</a></li>
			<li><a href="viewcart.php">Add to Cart</a></li>
<div id='nav-tools'>
  <a href='#' class='nav-a nav-a-2 nav-truncate' data-nav-ref='nav_ya_signin' data-nav-role='signin' data-nav-tabindex='25' id='nav-link-yourAccount'><span class='nav-line-1'>Hello. Sign In</span><span class='nav-line-2'>Your Orders</span>
<select>
<option value="Your Account">Your Account</option>
 <option value="Your Orders">Your Orders</option>
 <option value="Your Wishlist">Your Wishlist</option>
  <option value="Your Recommendations">Your Recommendations</option><span class='nav-icon nav-arrow'></span></span></a><a href='viewcart.php' class='nav-a nav-a-2' data-nav-tabindex='26' id='nav-cart'><span class='nav-line-1'> </span>
</select><span class='nav-line-2'>Cart<span class='nav-icon nav-arrow'></span></span><span class='nav-cart-icon nav-sprite'></span><span id='nav-cart-count' class='nav-cart-count nav-cart-0'>0</span></a><a href='/gp/registry/wishlist/ref=nav_wishlist_btn' class='nav-a nav-a-2' data-nav-tabindex='27' id='nav-link-wishlist'><span class='nav-line-1'></span><span class='nav-line-2'><span class='nav-icon nav-arrow'></span></span></a>
</div>
	
			
</ul>