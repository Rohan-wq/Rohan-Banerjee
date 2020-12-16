<?php 
$db = new MySQLi('localhost','root', '' ,'testdb');


if(isset($_GET['search'])){
	$searchkey = $_GET['search'];
	$sql = "SELECT * FROM product_table WHERE pname LIKE '%$searchkey%'";
}else
$sql = "SELECT * FROM product_table ";
$result	=	$db->query($sql);
?>
<table border="2">
		<tr>
			<th>id</th>
			<th>pname</th>
			<th>price</th>
			<th>is_available</th>
			<th>product_image</th>
			<th>created_date</th>

		</tr>
		
        <?php while( $row = $result->fetch_object() ): ?>

			<tr>
				<td><?php echo $row->id ?></td>
				<td><?php echo $row->pname ?> </td>
				<td><?php echo $row->price ?></td>
				<td><?php echo $row->is_available ?></td>
				<td><?php echo $row->product_image ?></td>
				<td><?php echo $row->created_date ?></td>
			</tr>
		<?php endwhile;?>
	</table>
