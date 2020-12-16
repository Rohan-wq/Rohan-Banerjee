
<?php
session_start();

include "connection.php";

if(isset($_POST['fullname'])) {

	$pass = md5($_POST['password']);
	$sql = "INSERT INTO `user` (`id`, `email`, `password_hash`, `fullname`) VALUES (NULL, '$_POST[email]', '$pass', '$_POST[fullname]');" ;
	$res = $db->query($sql);

	header("Location: index.php?msg=Registered!, Login Now!");
}

?>
<HTML>
	<BODY BACKGROUND = "bg.webp">
	<CENTER>
	<H1>Register</H1>
	

<script type="text/javascript">
	function verify() 
	{
		var p1 = document.f1.password.value;
		var p2 = document.f1.confirm_password.value;

		if(p1.length<5) {
			alert('Password must be at least 5 Chars!');
			return false;
		}

		if(p1!=p2) {
			alert('Passwords do not match!');
			return false;
		}

	return true;
	}
</script>
	<FORM NAME = f1 ACTION = "register.php" METHOD = "POST" ONSUBMIT = "return verify();">
	<TABLE>
		<TR>
			<TD>Fullname</TD>
			<TD><INPUT required TYPE = "TEXT" NAME = "fullname"></TD>
		</TR>
		<TR>
			<TD>Email</TD>
			<TD><INPUT required TYPE = "EMAIL" NAME = "email"></TD>
		</TR>
		<TR>
			<TD>Password</TD>
			<TD><INPUT TYPE = "PASSWORD" NAME = "password"></TD>
		</TR>
			<TR>
			<TD>Confirm Password</TD>
			<TD><INPUT TYPE = "PASSWORD" NAME = "confirm_password"></TD>
		</TR>
		<TR>
			<TD></TD>
			<TD><INPUT TYPE = "SUBMIT" VALUE = " Register "></TD>
		</TR>
	</TABLE>

	</FORM>

	<?php include "links.php"; ?>
	</CENTER>
	</BODY>
</HTML>
