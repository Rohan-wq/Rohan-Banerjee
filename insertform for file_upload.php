<form method = "post" action = "insert.php" enctype = "multipart/form-data">
	<table>
		<tr>
			<th>Caption</th>
			<td><input type="text" name="caption"></td>
		</tr>
		
		<tr>
			<th>File</th>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" name="insert" value = "Upload"></td>
		</tr>
	</table>
</form>