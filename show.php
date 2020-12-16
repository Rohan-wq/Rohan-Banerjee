<?php

$db = new MySQLi("localhost","root",NULL,"testdb");

if(isset($_GET['delete_id'])) {
	$sql = "DELETE FROM `product_table` WHERE `id` = '$_GET[delete_id]' ";
	$db->query($sql);
}

if(isset($_POST['upd_id']))

{

	$sql = "UPDATE `product_table` SET `product_image` = '$_POST[product_image]',`name` = '$_POST[name]',`email` = '$_POST[email]',`contactno` ='$_POST[contactno]',`address` = '$_POST[address]',`gender` = '$_POST[gender]',`course` = '$_POST[course]',`remarks` = '$_POST[remarks]' WHERE `id` = '$_POST[upd_id]' ";

	$db->query($sql);

	$_GET['edit_id']  = null;
}

?>


<HTML>
	<BODY>
		<center>
		<H1>SHOW_RECORD</H1>

		<TABLE CELLSPACING = 2 CELLPADDING = 10 BGCOLOR = silver>
			<TR>
				<TH>id</TH>
				<TH>pname</TH>
				<TH>price</TH>
				<TH>is_available</TH>
				<TH>product_image</TH>
				<TH>created_date</TH>
				<TH COLSPAN= 2 >Options</TH>
			</TR>



	<?php

	error_reporting(E_ALL & ~E_NOTICE);
	
	$sql = "SELECT * FROM `product_table`";
	$res = $db->query($sql);
	while($row = $res->fetch_array()) 
	{
	
		if($_GET['edit_id'] == $row['id']) 
		{
			print "
			<FORM METHOD = POST>
				<TR BGCOLOR = WHITE>
					<TD><INPUT TYPE =HIDDEN NAME =upd_id VALUE = $row[id]>$row[id]</TD>

					<TD><INPUT TYPE = TEXT NAME = pname VALUE = \"$row[pname]\"></TD>

					<TD><INPUT TYPE = TEXT NAME = price VALUE = \"$row[price]\"></TD>

					<TD><INPUT TYPE = TEXT NAME = is_available VALUE = \"$row [is_available]\"></TD>
					
					<TD><INPUT TYPE = FILE NAME = product_image VALUE = \"$row[product_image]\"></TD>
					
					<TD><INPUT TYPE = TEXT NAME =created_date VALUE = \"$row[created_date]\"></TD>

					<TD><INPUT TYPE = SUBMIT VALUE = Update></TD>
					<TD><A HREF = \"show.php?delete_id=$row[id]\" ONCLICK = \"return confirm('Are you Sure, you want to Delete?');\">Delete</A></TD>
				</TR>
			</FORM>
			";
		} 
     
		else {
			print "
			<TR BGCOLOR = WHITE>
				<TD>$row[id]</TD>
				<TD>$row[pname]</TD>
				<TD>$row[price]</TD>
				<TD>$row[is_available]</TD>
				<TD>$row[product_image]</TD>
				<TD>$row[created_date]</TD>
				<TD><A HREF = \"show.php?edit_id=$row[id]\">Edit</A></TD>
				<td><A HREF = \"show.php?delete_id=$row[id]\" ONCLICK = \"return confirm('Are you Sure?');\">Delete</A></td>
			</TR>";
		}

	 

	}
	?>

		</TABLE>
		<p><a href="insert.php">Insert Record</a></p>
		
		<form action="nex.php" method="GET" >		<input type="text" name="search" class="search" placeholder="search here...">
		<button>search</button>
</form>
		
	</center>
	
	</BODY>
</HTML>
