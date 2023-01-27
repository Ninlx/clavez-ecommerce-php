<table class="table table-striped">
	<thead>
	<td>ID</td>
	<td>Plate Number</td>
	<td>Type</td>
	<td>Color</td>
	<td>Edit</td>
	<td>Delete</td>
	
	</thead>

	<tbody>
		<?php foreach ($trucks as $truck): ?>
		
			<?= "<tr>" ?>
				<?= "<td>".$truck["id"]."</td>" ?>
				<?= "<td>".$truck["plate_number"]."</td>" ?>
				<?= "<td>".$truck["truck_type"]."</td>" ?>
				<?= "<td>".$truck["truck_color"]."</td>" ?>
				<?= "<td>
				<form action=\"truck.php\" method=\"post\">
					<input type=\"hidden\" name=\"controller\" value=\"edit\">
					<input type=\"hidden\" name=\"id\" value=\"" . $truck["id"] . "\">
					<td><button type=\"submit\" class='btn btn-info'><span span class = 'glyphicon glyphicon-edit'> EDIT<span/></button></td>
					
				</form>
				</td>" ?>
				<?= "<td>
				
			  <form action=\"truck.php\" method=\"post\">
					<input type=\"hidden\" name=\"controller\" value=\"delete\">
					<input type=\"hidden\" name=\"id\" value=\"" . $truck["id"] . "\">
					<td><button type=\"submit\" class='btn btn-danger'><span span class = 'glyphicon glyphicon-trash'> DELETE<span/></button></td>
				</form>
				
				</td>" ?>
				
				
			<?= "</tr>" ?>
			
			<?php endforeach ?>
	</tbody>
</table>
<br>
<br>
<br>
<br>
<br>

<a class="btn btn-primary" href="addtruck.php">ADD TRUCK</a>