<table class="table table-striped" border="1">
	<thead>
        <td>ID</td>
        <td>NAME</td>
        <td>COUNTRY</td>     
        <td>ACTION</td>  
	</thead>

	<tbody>
		<?php foreach ($authors as $author): ?>
		
			<?= "<tr>" ?>
				<?= "<td>".$author["authorid"]."</td>" ?>
				<?= "<td>".$author["lastname"]. ", " .$author["firstname"]."</td>" ?>
				<?= "<td>".$author["country"]."</td>" ?>
		<form action="editauthor.php" method="post">
				<input type="hidden" name="controller" value="edit" />
				<input type="hidden" value="<?php echo $author["authorid"]; ?>" name="authorid" />
				<?= "<td><button type='submit' class='btn btn-info'><span class = 'glyphicon glyphicon-edit'> EDIT</span></button>" ?>
		</form>
		<form action="editauthor.php" method="post">
				<input type="hidden" name="controller" value="delete" />
				<input type="hidden" value="<?php echo $author["authorid"]; ?>" name="authorid" />
				<?= "<button type='submit' class='btn btn-danger'><span class = 'glyphicon glyphicon-trash'> DELETE</span></button></td>" ?>
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

<a class="btn btn-primary" href="addauthor.php"><span class = "glyphicon glyphicon-plus"></span> ADD AUTHOR</a>