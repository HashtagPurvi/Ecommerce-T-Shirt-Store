<?php
	$shirts = array();
	$shirts[0] = array(

			"name"=> "shirt 1",
			"price"=>11,
			"img" =>"img/shirts/shirt-101.jpg",
			"paypal"=>"CZ9Z5B939A4BY"
		);
	$shirts[1] = array(

			"name"=> "shirt 2",
			"price"=>12,
			"img" =>"img/shirts/shirt-102.jpg",
			"paypal"=>"9E5GHJ7BEMF68"
		);
	$shirts[2] = array(

			"name"=> "shirt 3",
			"price"=>13,
			"img" =>"img/shirts/shirt-103.jpg",
			"PayPal"=>"ALQ3M2GHQVT5U"
		);
	$shirts[3] = array(

			"name"=> "shirt 4",
			"price"=>14,
			"img" =>"img/shirts/shirt-104.jpg",
			"paypal"=>"JA6GS7ALUEC3Y"
		);
	$shirts[4] = array(

			"name"=> "shirt 4",
			"price"=>14,
			"img" =>"img/shirts/shirt-105.jpg",
			"paypal"=>"JA6GS7ALUEC3Y"
		);
	$shirts[5] = array(

			"name"=> "shirt 4",
			"price"=>14,
			"img" =>"img/shirts/shirt-106.jpg",
			"paypal"=>"JA6GS7ALUEC3Y"
		);

	$shirts[6] = array(

			"name"=> "shirt 4",
			"price"=>14,
			"img" =>"img/shirts/shirt-107.jpg",
			"paypal"=>"JA6GS7ALUEC3Y"
		);
	$shirts[7] = array(

			"name"=> "shirt 4",
			"price"=>14,
			"img" =>"img/shirts/shirt-108.jpg",
			"paypal"=>"JA6GS7ALUEC3Y"
		);
	function displayShirts($shirtsId, $shirts){

		$shirt ="";
		$shirt = $shirt."<li>".'<a href="shirt-detail.php?id=' .$shirtsId. '">'.'<img src="'.$shirts["img"].'"'.'alt="'.$shirts["name"].'">'.'<p>View Details</p>'.'</a>'.'</li>';
		
		return $shirt;
	}
?>
