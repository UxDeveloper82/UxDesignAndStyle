<?php
    
	require_once"db/uxconnection.php";
	$query = "SELECT * FROM applications";
	$result = $conn->query($query);

?>

<section id="main-gallery">
	     <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">APP-TEMPLATES</h2>
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
				       <?php while($product= mysqli_fetch_array($result)):?>
				        <div class="col-md-3 col-sm-3 outside-box">
								<div class="inside-box">					  
									 <img src="<?=$product['image'];?>" class="img-responsive" alt="ultimate-website">
									 <div class="overlay">
										  <div class="text"><?=$product['maintitle'];?></div>
									 </div>
								</div>
								<div class="content">
									  <h3><?=$product['title'];?></h3>
									  <p><?=$product['description'];?></p>
									  <a href="<?=$product['link'];?>" class="btn btn-primary btn-outline">More Info</a>
								</div>	 
						</div>
	                    <?php endwhile; ?>				
                </div>
		</div>
</section>
