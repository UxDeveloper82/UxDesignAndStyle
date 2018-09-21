<?php
    
	require_once"db/uxconnection.php";
	$query = "SELECT * FROM portfolio";
	$result = $conn->query($query);

?>

<section id="main-gallery">
	     <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">MY LATEST WORKS</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
	  <script>
	  $(window).load(function(){
	    $("img").mouseover(function(){$(this).fadeTo(1000,1);});
	    $("img").mouseout(function(){$(this).fadeTo(1000,.3);});
	  
	  });
	  </script>  
	    <div class="container text-center">
			    <div class="row">
				        <?php while($products=mysqli_fetch_assoc($result)) :?>
				        <div class="col-md-4 col-sm-4 outside-box">
								<div class="inside-box">					  
									 <img src="<?=$products['image'];?>" class="img-responsive" alt="ultimate-website">
									 <div class="overlay">
										  <div class="text"><?= $products['maintitle'];?></div>
									 </div>
								</div>
								<div class="content">
									  <h3><?=$products['title'];?></h3>
									  <p><?=$products['description'];?></p>
									  <a href="<?= $products['link'];?>" class="btn btn-primary btn-outline">More Info</a>
								</div>	 
						</div>
	                    <?php endwhile;?>								
                </div>
		</div>      
</section>

