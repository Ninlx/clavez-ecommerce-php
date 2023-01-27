<div align="left">

<form action="editcustomer.php" method="post">
	<input type="text" class="form-control" name="firstname" value="<?php echo $customer["firstname"]; ?>" />
	<input type="text" class="form-control" name="lastname" value="<?php echo $customer["lastname"]; ?>" />
	<input type="text" class="form-control" name="address" value="<?php echo $customer["address"]; ?>" />
	<input type="text" class="form-control" name="contact" value="<?php echo $customer["contact"]; ?>" />
	<input type="hidden" name="controller" value="update" />
	<input type="hidden" name="id" value="<?php echo $customer["id"]; ?>" />
	<button type="submit" class="btn btn-primary">UPDATE</button>
</form>

</div>