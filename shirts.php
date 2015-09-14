<?php 

	$pageTitle = "PulpyPapaya's Full Catalog of Shirts";
	$section = "shirts";
	include('inc/header.php'); 
	include('products.php');
?>
	<div class="section shirts page">																																																																																													
		<div class="wrapper">
			<h1>Full Catalog of Shirts</h1>
			<ul class="products">
				<?php
						foreach ($shirts as $shirtsId => $shirt) 
						echo displayShirts($shirtsId,$shirt);
				?>
			</ul>	
			</div>
			
		</div>

<?php include('inc/footer.php') ?>


