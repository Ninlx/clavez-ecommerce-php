<table class="table table-striped" border="1">
	<thead>
	<td>ID</td>
	<td>NAME</td>
	<td>ADDRESS</td>
	<td>CONTACT</td>
	<td>ACTION</td>
	<td>ACTION</td>
	</thead>

	<tbody>
		<?php foreach ($customers as $customer): ?>
		
			<?= "<tr>" ?>
				<?= "<td>".$customer["id"]."</td>" ?>
				<?= "<td>".$customer["lastname"]. ", " .$customer["firstname"]."</td>" ?>
				<?= "<td>".$customer["address"]."</td>" ?>
				<?= "<td>".$customer["contact"]."</td>" ?>
		<form action="editcustomer.php" method="post">
				<input type="hidden" name="controller" value="edit" />
				<input type="hidden" value="<?php echo $customer["id"]; ?>" name="customerId" />
				<?= "<td><button type='submit' class='btn btn-info'><span class = 'glyphicon glyphicon-edit'> EDIT</span></button></td>" ?>
		</form>
		<form action="editcustomer.php" method="post">
				<input type="hidden" name="controller" value="delete" />
				<input type="hidden" value="<?php echo $customer["id"]; ?>" name="customerId" />
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

<a class="btn btn-primary" href="addcustomer.php"><span class = "glyphicon glyphicon-plus"></span> ADD CUSTOMER</a>