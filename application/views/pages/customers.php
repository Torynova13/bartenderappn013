<html>
<head>
	<title>The Menu</title>
	<link rel = "stylesheet"  href = "https://bootswatch.com/3/paper/bootstrap.min.css" />
	<style>
		table{
			border-collapse: collapse;
			width:60%;
			margin-left:100px;

		}
		td, th {
			border: 1px solid;
			border-color:black;
			text-align: center;
			padding: 8px;
			overflow:auto;
		}
		th{
			background-color:gray;
		}
	</style>
</head>
<body>
<center><a href="<?php echo base_url(); ?>"><h1>Welcome to the Bar</h1></a></center>
<form method="post" action="#">
	<table>
		<tr>
			<th colspan="4">Menu</th>
		</tr>
		<tr>
			<td> <strong>Drink </td>
			<td> <strong>Price </td>
			<td> <strong>Qty </td>
			<td> <strong>Order </td>
		</tr>
		<tr>
			<td> Red Wine</td>
			<td> $7.00 </td>
			<td><select name="Quantity">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option
					<option value="4">4</option
				</select>
			</td>
			<td> <input type="submit" name="submit" value="Order" /></td>
		</tr>
	</table>
</form>


<?php
if(isset($_POST['submit'])){
	$selected_val = $_POST['Quantity'];
	echo "Number of drinks ordered: " .$selected_val;
	echo "<br>";
	echo "Your total: $" .$selected_val * 7.00;
}
?>



</body>
</html>
