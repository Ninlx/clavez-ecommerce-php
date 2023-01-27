<table class="table table-striped" border="1">
	<thead>
	<td>TRUCK ID</td>
	<td>DRIVERS ID</td>
	<td>DESTINATION</td>
	<td>DATE LEFT</td>
	<td>TIME LEFT</td>
	<td>DATE ARRIVAL</td>
	<td>TIME ARRIVAL</td>
	<td>STATUS</td>
	<td>ACTION</td>
	</thead>

	<tbody>
		<?php foreach ($routes as $route): ?>
		<form action="editroute.php" method="post">
			<?= "<tr>" ?>
				<?= "<td>".$route["truck_id"]."</td>" ?>
				<?= "<td>".$route["driver_id"]. "</td>" ?>
				<?= "<td>".$route["destination"]."</td>" ?>
				<?= "<td>".$route["dateleft"]."</td>" ?>
				<?= "<td>".$route["timeleft"]."</td>" ?>
				<?= "<td>".$route["datearrival"]."</td>" ?>
				<?= "<td>".$route["timearrival"]."</td>" ?>
				<?= "<td>".$route["status"]."</td>" ?>
				
				<input type="hidden" name="controller" value="edit" />
				<input type="hidden" value="<?php echo $route["truck_id"]; ?>" name="truck_id" />
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

<a class="btn btn-primary" href="addnewroute.php"><span class = 'glyphicon glyphicon-plus'> ADD NEW TRAVEL</span></a>
<a class="btn btn-primary" href="pdf.php" target="blank"><span class = 'glyphicon glyphicon-download'> DOWNLOAD PDF</span></a>