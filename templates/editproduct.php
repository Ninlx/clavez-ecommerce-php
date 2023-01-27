<div align="left">

<form action="editproduct.php" method="post">



		<label for="leftMonth">Select Arrival Date:</label>
		<div class="form-inline">
			<select name="leftMonth" class="form-control">
				<option value="1">Select Month</option>
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>
			<select name="leftDay" class="form-control">
				<?php for($x = 1; $x <= 31; $x++){
					echo '<option value="' . $x . '">' . $x . '</option>';
				} ?>
			</select>
			<select name="leftYear" class="form-control">
				<?php for($y = date("Y"); $y >= 1950; $y--){
					echo '<option value="' . $y . '">' . $y . '</option>';
				} ?>
			</select>
		</div>
		<br/>

		<label for="timearrival">Arrival Time:</label>
        <div class="form-inline">
            <input class="form-control" name="timearrival" placeholder="Time Arrival" type="text"/>
			<select name="meridiam" class="form-control">
				<option value="AM">AM</option>
				<option value="PM">PM</option>
			</select>
        </div>
		
		<label for="arrival">Destination:</label><br>
		<input class="form-control" name="destination" placeholder="Destination" type="text"/>
		
		<br>
		<label for="arrival">Status:</label><br>
		<input class="form-control" name="status" placeholder="Status" type="text"/>



	<input type="hidden" name="controller" value="update" />
	<input type="hidden" name="product_id" value="<?php echo $product["product_id"]; ?>" />
	<br>
	<br>
	
	
	<button type="submit" class="btn btn-primary">UPDATE</button>
</form>

</div>