
<br/>
<br/>
<table class="table table-striped" style="bg-color:lime">
<thead>
        <td align="center"><b>Customers Name</b></td>
        <td align="center"><b>Action</b></td>

</thead>

<tbody>
        <?php foreach ($customer as $customer):?>
        <?= "<tr>" ?>
            <?= "<td>".$customer["name"]."</td>" ?>
        
                    <td>
                    <form action="viewcustomer.php" method="post">
                        <input type="hidden" value="view" name="controller" />
                        <input type="hidden" value="<?php echo $customer["id"]; ?>" name="id" />
                        <button type="submit" class="btn btn-info">View</button>
                    </form>
                    </td>
                    
        <?= "</tr>" ?>
        <?php endforeach ?>
	 <div class="col-sm-6 col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading"><strong>Search Customer</strong></div>
			<div class="panel-body">
				
				<div class="col-xs-10 text-center">
					<form action="search.php" method="get">
						<div class="input-group">
							<input class="form-control" type="text" name="keyword" placeholder="Keyword" />
							<span class="input-group-btn">
								<button class="btn btn-info" type="submit">SEARCH</button>
							</span>
						</div>
					</form>
				</div>
				
			</div>
		</div>
        
</tbody>
</table>    