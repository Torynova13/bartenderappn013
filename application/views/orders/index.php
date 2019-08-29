<head><link rel = "stylesheet"  href = "https://bootswatch.com/3/paper/bootstrap.min.css" /></head>
<h2><a href="<?php echo base_url(); ?>/home" >HOME</a></h2>
<table border = '1'>
	<?php foreach ($orders as $order) : ?>
		<tr>
			<td><?php echo $order['Drink']?></td>
			<td><?php echo $order['Price']?></td>
		</tr>
		<br>
	<?php endforeach; ?>
</table>
