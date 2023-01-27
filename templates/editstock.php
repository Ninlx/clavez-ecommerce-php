<div align="left">

<form action="editstock.php" method="post">
	<input type="text" class="form-control" name="product_name" value="<?php echo $stock["product_name"]; ?>" />
	<input type="text" class="form-control" name="product_type" value="<?php echo $stock["product_type"]; ?>" />
	<input type="text" class="form-control" name="product_color" value="<?php echo $stock["product_color"]; ?>" />
	<input type="hidden" name="controller" value="update" />
	<input type="hidden" name="id" value="<?php echo $stock["id"]; ?>" />
	<button type="submit" class="btn btn-primary">UPDATE</button>
</form>

</div>