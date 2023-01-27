<table class="table table-striped" border="1">
	<thead>
	<td>ID</td>
	<td>NAME</td>
	<td>ADDRESS</td>
	<td>ACTION</td>
	<td>ACTION</td>
	</thead>

	<tbody>
		<?php foreach ($drivers as $driver): ?>
		
			<?= "<tr>" ?>
				<?= "<td>".$driver["id"]."</td>" ?>
				<?= "<td>".$driver["lastname"]. ", " .$driver["firstname"]."</td>" ?>
				<?= "<td>".$driver["address"]."</td>" ?>
		<form action="editdriver.php" method="post">
				<input type="hidden" name="controller" value="edit" />
				<input type="hidden" value="<?php echo $driver["id"]; ?>" name="driverId" />
				<?= "<td><button type='submit' class='btn btn-info'><span class = 'glyphicon glyphicon-edit'> EDIT</span></button></td>" ?>
		</form>
		<form action="editdriver.php" method="post">
				<input type="hidden" name="controller" value="delete" />
				<input type="hidden" value="<?php echo $driver["id"]; ?>" name="driverId" />
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

<a class="btn btn-primary" href="adddriver.php"><span class = "glyphicon glyphicon-plus"></span> ADD DRIVER</a>