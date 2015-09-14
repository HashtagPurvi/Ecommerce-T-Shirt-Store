<?php 
$pageTitle = "Unique T-shirts desigs based on Gond Art | Central India";
$section = "home";
include('inc/header.php'); 
include("products.php");
?>
<div class="section banner">
	<div class="wrapper">
		</div>
</div>

<div class="section shirts latest">
	<div class="wrapper">
		<h2>Our Latest Shirts</h2>
		<ul class="products">
			<?php
				$numOfShirts = count($shirts); 
				$position =0;

				foreach ($shirts as $shirtsId => $shirt) 
				{
					$position+=1;
					if($numOfShirts-$position <4){
						echo displayShirts($shirtsId,$shirt);
					}
				}
			?>
		</ul>
	</div>
</div>

<?php include('inc/footer.php') ?>