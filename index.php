
<HTML>
	<BODY BACKGROUND = "bg.webp">
	<CENTER>
	<H1>Login</H1>
	
	<FORM ACTION = "verify.php" METHOD = "POST">
	<TABLE>
		<TR>
			<TD>Email</TD>
			<TD><INPUT required TYPE = "TEXT" NAME = "username"></TD>
		</TR>
		<TR>
			<TD>Password</TD>
			<TD><INPUT TYPE = "PASSWORD" NAME = "password"></TD>
		</TR>
		<TR>
			<TD></TD>
			<TD><INPUT TYPE = "SUBMIT" VALUE = " Login "></TD>
		</TR>
	</TABLE>

	</FORM>

	<?php include "links.php"; ?>
	</CENTER>
	</BODY>
</HTML>