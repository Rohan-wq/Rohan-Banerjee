
<CENTER>

	<?php
	if($_SESSION['logged_in']!=true)
	{
		print '<A HREF = "index.php">Login</A>
		&nbsp; | &nbsp; 
		<A HREF = "register.php">Register</A>
		';
	}
	else
	{
		?>
		<A HREF = "logout.php">Logout (<?php print $_SESSION['fullname'];?>)</A> 
	
	
	<?php } ?>
</CENTER>
