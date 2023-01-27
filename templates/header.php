<!DOCTYPE html>

<html>

    <head>

        <link href="./css/bootstrap.min.css" rel="stylesheet"/>
        <link href="./css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="./css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>ROIDEN PAGE</title>
        <?php else: ?>
            <title>CLAVEZ</title>
        <?php endif ?>

        <script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/scripts.js"></script>

    </head>

    <body>
	
		
		<nav class="navbar navbar-inverse">
			
        <div class="container">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#">R O I D E N'S SHOP</center></a>
				</div>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					
					
					<?php if(isset($_SESSION["id"])) {
					echo '
					<li class="active"><a href="./index.php">HOME <span class="sr-only">(current)</span></a></li>
					
					<li><a href="./about.php">ABOUT</a></li>
					<li><a href="./logout.php">LOGOUT</a></li> '; }

							
					?>
				</ul>
			</div>
			</div>
		</nav>
		<div class="container">
		<?php if(isset($_SESSION["id"])) {
			echo '
			<ul class="nav nav-tabs">
			<li><a href="./search.php">Search</a></li>
				<li><a href="./customer.php">Customers</a></li>
				<li><a href="./product.php">Products</a></li>
				<li><a href="./stock.php">Stocks</a></li>
				<li><a href="./author.php">Authors</a></li>
			
			</ul>
			
			';
		}
		?>
		</div>
		
		
		
		
		
			  <div class="container">		

            <div id="top">
                <a href="./"></a>
				
				<br>
				
            </div>
            

            <div id="middle">