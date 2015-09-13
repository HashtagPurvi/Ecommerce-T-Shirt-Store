<?php

	include('products.php');

	if(isset($_GET['id']))
	{		
		$shirt_id = $_GET['id'];
		if(isset($shirts[$shirt_id]))
			$shirt = $shirts[$shirt_id];
		else
			{
				header("Location: shirts.php");
				exit();
			}
	}

	$pageTitle = $shirt["name"];
    $section = "shirts";
    include('inc/header.php');
	
?>

<div class="section page">																																																																																													
		<div class="wrapper">
			<div class="breadcrumb"><a href="shirts.php">All Shirts</a>&gt;
			<?php echo $shirt["name"]; ?>
			
				<div class="shirt-picture">
					<span>
						<img src="<?php echo $shirt["img"]; ?>" alt="<?php $shirt["name"]; ?>">
					</span>
				</div>
			</div>

			<div class="shirt-details">
				<h1>
					<span class="price">
					<?php
						echo "$".$shirt["price"];
						
					?>
					</span>
					<?php echo $shirt["name"]; ?>
				</h1>
				<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="<?php echo $shirt["paypal"];?>">
					<table>
						<tr>
							<th>
								<input type="hidden" name="on0" value="Size">
								<label for="os0">Size</label>
							</th>

						<td>
							<select name="os0">
							<option value="S">S </option>
							<option value="M">M </option>
							<option value="L">L </option>
							</select>
						</td>
						</tr>
					</table>
					<input type="submit" value="Add to Cart" name="submit" alt="PayPal - The safer, easier way to pay online!">
	
				</form>

				<p class="note-designer">*All Shirts are designed by PulpyPapaya !! </p>
			</div>
					
		</div>
			
</div>

<?php include('inc/footer.php') ?>