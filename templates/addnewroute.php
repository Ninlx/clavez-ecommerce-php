<form action="addnewroute.php" method="post">
    <fieldset>
		<label for="driverId">Select Driver:</label>
		<div class="form-group">
			<select name="driverId" class="form-control">
				<?php foreach($drivers as $driver) : ?>
				<option value="<?php echo $driver["id"]; ?>"><?php echo $driver["lastname"] . ", " . $driver["firstname"]; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<label for="leftMonth">Select Left Date:</label>
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

		<label for="timeleft">Left Time:</label>
        <div class="form-inline">
            <input class="form-control" name="timeleft" placeholder="Time Left" type="text"/>
			<select name="meridiam" class="form-control">
				<option value="AM">AM</option>
				<option value="PM">PM</option>
			</select>
        </div><br/>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Add New Trip</button>
        </div>
    </fieldset>
</form>
<div>
    
</div>
