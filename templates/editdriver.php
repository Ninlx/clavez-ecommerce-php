<div align="left">

<form action="editdriver.php" method="post">
	<input type="text" class="form-control" name="firstname" value="<?php echo $driver["firstname"]; ?>" />
	<input type="text" class="form-control" name="lastname" value="<?php echo $driver["lastname"]; ?>" />
	<input type="text" class="form-control" name="address" value="<?php echo $driver["address"]; ?>" />
	<input type="hidden" name="controller" value="update" />
	<input type="hidden" name="id" value="<?php echo $driver["id"]; ?>" />
	<button type="submit" class="btn btn-primary">UPDATE</button>
</form>

</div>