<table class="table table-striped" border="1">
	<thead>
	<td>ID</td>
	<td>PRODUCT NAME</td>
	<td>PRODUCT TYPE</td>
	<td>PRODUCT COLOR</td>
	<td>ACTION</td>
	<td>ACTION</td>
	</thead>

	<tbody>
		<?php foreach ($stocks as $stock): ?>
		
			<?= "<tr>" ?>
				<?= "<td>".$stock["id"]."</td>" ?>
				<?= "<td>".$stock["product_name"]. "</td>" ?>
				<?= "<td>".$stock["product_type"]."</td>" ?>
				<?= "<td>".$stock["product_color"]."</td>" ?>
		<form action="editstock.php" method="post">
				<input type="hidden" name="controller" value="edit" />
				<input type="hidden" value="<?php echo $stock["id"]; ?>" name="stockrId" />
				<?= "<td><button type='submit' class='btn btn-info'><span class = 'glyphicon glyphicon-edit'> EDIT</span></button></td>" ?>
		</form>
		<form action="editstock.php" method="post">
				<input type="hidden" name="controller" value="delete" />
				<input type="hidden" value="<?php echo $stock["id"]; ?>" name="stockId" />
				<?= "<td><button type='submit' class='btn btn-danger'><span class = 'glyphicon glyphicon-trash'> DELETE</span></button></td>" ?>
		</form>
			<?= "</tr>" ?>
		
			<?php endforeach ?>
	</tbody>
</table>
<br>
<br>
<br>
<br> 
<br>

<a class="btn btn-primary" href="addcustomer.php"><span class = "glyphicon glyphicon-plus"></span> ADD STOCK</a>