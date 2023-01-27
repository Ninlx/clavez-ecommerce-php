<table class="table table-striped" border="1">
	<thead>
	<td>PRODUCT ID</td>
	<td>ITEMS ID</td>
	<td>DESTINATION</td>
	<td>DATE LEFT</td>
	<td>TIME LEFT</td>
	<td>DATE ARRIVAL</td>
	<td>TIME ARRIVAL</td>
	<td>STATUS</td>
	<td>ACTION</td>
	</thead>

	<tbody>
		<?php foreach ($products as $product): ?>
		<form action="editproduct.php" method="post">
			<?= "<tr>" ?>
				<?= "<td>".$product["product_id"]."</td>" ?>
				<?= "<td>".$product["items_id"]. "</td>" ?>
				<?= "<td>".$product["destination"]."</td>" ?>
				<?= "<td>".$product["dateleft"]."</td>" ?>
				<?= "<td>".$product["timeleft"]."</td>" ?>
				<?= "<td>".$product["datearrival"]."</td>" ?>
				<?= "<td>".$product["timearrival"]."</td>" ?>
				<?= "<td>".$product["status"]."</td>" ?>
				
				<input type="hidden" name="controller" value="edit" />
				<input type="hidden" value="<?php echo $product["product_id"]; ?>" name="product_id" />
				<?= "<td><button type='submit' class='btn btn-info'>VIEW</button></td>" ?>

			<?= "</tr>" ?>
		</form>
			<?php endforeach ?>
	</tbody>
</table>
<br>
<br>
<br>
<br> 
<br>

<a class="btn btn-primary" href="addnewroute.php"><span class = 'glyphicon glyphicon-plus'> ADD NEW PRODUCT</span></a>
<a class="btn btn-primary" href="pdf.php" target="blank"><span class = 'glyphicon glyphicon-download'> DOWNLOAD PDF</span></a>