<?php include 'includes/session.php'; ?>
<?php include 'includes/navbar.php'; ?>

<?php
	$slug = $_GET['category'];

	$conn = $pdo->open();

	try{
		$stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :slug");
		$stmt->execute(['slug' => $slug]);
		$cat = $stmt->fetch();
		$catid = $cat['id'];
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	$pdo->close();

?>
<?php include 'includes/header.php'; ?>
<body style="   background: #bde2f3;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #fffcdc, #a1dfe7);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #fffcdc, #a9e7f7)">

	      <!-- Main content -->
		  
		  <div class="candy" style="margin:0 20px">
  <div class="text">
      <h2>BAKERY & CANDY</h2>
      <p>
        Our assortment includes our fan-favorite cakes and cupcakes,<br>
         world-famous banana pudding, and a host of other classic baked goods.</p>
  </div>
  <div class="candy-img">
      <img src="./images/getty.jpg" alt="bakery" style="border-radius: 7px;margin-top:20px">
  </div>
</div>



	      <section class="content" style="margin:0 20px ">
	        <div class="row">
	        	<div class="col-md-10">
		            <h1 style="margin:70px 0;box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;" class="page-header"><?php echo $cat['name']; ?></h1>
		       		<?php
		       			
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE category_id = :catid");
						    $stmt->execute(['catid' => $catid]);
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
								   
	       						echo "
	       							<div class='col-md-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='250px' class='thumbnail'>
		       									<h4><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h4>
		       								</div>
		       								<div class='box-footer'>
		       									<b> ".number_format($row['price'], 2)."EG</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 

	        	</div>
	        	
	        </div>
	      </section>
	     
	
  
  	<?php include 'includes/footer.php'; ?>


<?php include 'includes/scripts.php'; ?>
</body>
</html>