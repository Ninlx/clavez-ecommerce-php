<form action="truck.php" method="post">
	<label>Plate Number:</label><br/>
	<input type="text" class="form-control" name="plate_number" value="<?php echo $truck["plate_number"]; ?>" /><br/>
	
	<label>Truck Type:</label><br/>
	<input type="text" class="form-control" name="truck_type" value="<?php echo $truck["truck_type"]; ?>" /><br/>
	
	<label>Truck Color:</label><br/>
	<input type="text" class="form-control" name="truck_color" value="<?php echo $truck["truck_color"]; ?>" /><br/><br/><br/>
	
	<input type="hidden" name="controller" value="update">
	<input type="hidden" class="form-control" name="id" value="<?php echo $truck["id"]; ?>" />
	<button type="submit" class="btn btn-default">Update Truck</button>

</form>

