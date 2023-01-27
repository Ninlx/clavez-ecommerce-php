<div align="left">

<form action="editauthor.php" method="post">
	<input type="text" class="form-control" name="lastname" value="<?php echo $author["lastname"]; ?>" />
	<input type="text" class="form-control" name="firstname" value="<?php echo $author["firstname"]; ?>" />
	<input type="text" class="form-control" name="country" value="<?php echo $author["country"]; ?>" />
	
	<input type="hidden" name="controller" value="update" />
	<input type="hidden" name="authorid" value="<?php echo $author["authorid"]; ?>" />
	<button type="submit" class="btn btn-primary">UPDATE</button>
</form>

</div>