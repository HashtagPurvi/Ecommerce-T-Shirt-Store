<?php 
	$pageTitle = "PulpyPapaya's Full Catalog of Shirts";
	$section = "shirts";
	include('inc/header.php'); 

	$shirts = array();
	$shirts[0] = array(

			"name"=> "shirt 1",
			"price"=>11,
			"img" =>"img/shirts/shirt-101.jpg"
		);
	$shirts[1] = array(

			"name"=> "shirt 2",
			"price"=>12,
			"img" =>"img/shirts/shirt-102.jpg"
		);
	$shirts[2] = array(

			"name"=> "shirt 3",
			"price"=>13,
			"img" =>"img/shirts/shirt-103.jpg"
		);
	$shirts[3] = array(

			"name"=> "shirt 4",
			"price"=>14,
			"img" =>"img/shirts/shirt-104.jpg"
		);
?>

		<div class="section shirts page">
			<div class="wrapper">
			<h1>Full Catalog of Shirts</h1>
			<ul class="products">
				<?php

					foreach ($shirts as $shirt) 

					echo "<li>".'<a href="#">'.'<img src="'.$shirt["img"].'"'.'alt="'.$shirt["name"].'">'.'<p>View Details</p>'.'</a>'.'</li>';
					
					//echo ;
						

				?>
			</ul>	
			</div>
			
		</div>

<?php include('inc/footer.php') ?>
