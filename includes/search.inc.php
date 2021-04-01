<ul>
			<li id="login">
				
						<?php
							if(isset($_POST['user_name']))
{
        session_start();
        $_SESSION['name']=$_POST['user_name'];
        //Storing the name of user in SESSION variable.
        header("location: profile.php");
}
							else
							{
								echo '<form action="process_login.php" method="POST">
										<h2>LogIn to site</h2>
											<b>Username:</b>
											<br><input type="text" name="usernm"><br>
											<br>
											
											
											<b>Password:</b>
											<br><input type="password" name="pwd">
											<input type="submit" id="x" value="Login" />
										</form>';
							}
						?>
			</li>

			<li id="search">
				<h2>Search for Books</h2>
				<form method="GET" action="searchtable.html">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
			<li>
				<h2>Categories</h2>
				<ul>
					
					
					
					<li><a href="eco.html">Economics</a></li>
					<li><a href="fict.html">Fiction</a></li>
					<li><a href="tech.html">Technology & Engineering</a></li>
					<li><a href="fit.html">Health & Fitness</a></li>
					<li><a href="history.html">Historical</a></li>
					<li><a href="social.html">Social</a></li>
					<li><a href="sport.html">Sports & Physical Education</a></li>
					<li><a href="terror.html">Terrorism</a></li>
					<li><a href="tour.html">Tourism</a></li>
					<li><a href="track.html">Tracking </a></li>
					<li><a href="yoga.html">Yoga</a></li>
					
				
			</li>
			
		</ul>
                                                                            <h2>Catalogs Section</h2>
				<ul>
					
					
					
					<li><a href="BooklistCatalog.html">Booklist</a></li>
					<li><a href="ContactsCatalog.html">Contacts</a></li>
					<li><a href="CategoriesCatalog.html">Categories</a></li>
					<li><a href="SubCategoriesCatalog.html">SubCategories</a></li>
					<li><a href="CustomerCatalog.html">Customer</a></li>
					
					
				
			</li>
			
		</ul>