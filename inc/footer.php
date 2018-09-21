<section id="contact" class="contact bg-primary">
	         <div class="container">
			      <h2>We <i class="fa fa-heart"></i>New Friends!</h2>
			      <ul class="list-inline list-social">
			          <li class="social-twitter">
					       <a href="#"><i class="fa fa-twitter"></i></a>
					  </li>
			          <li class="social-facebook">
			              <a href="https://www.facebook.com/UxDesign-690772767726869/"><i class="fa fa-facebook"></i></a>
			          </li>
			          <li class="social-google-plus">
					      <a href="#"><i class="fa fa-google-plus"></i>
						  </a>
					  </li>
			      </ul>
			 </div>
	 </section>
<footer>
	    <div class="container">
	         <p>&copy;2016 UxDesign.
		     <br>All Rights Reserved.</p>
	         <ul class="list-inline">
	             <li>
					 <a href="#">Privacy</a>
			     </li>
	             <li>
					 <a href="#">Terms</a>
			     </li>	  
	             <li>
					 <a href="#">FAQ</a>
				 </li>
	          </ul>
	    </div>
</footer>

<!-- Bootstrap Core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="js/app.js"></script>
<script>
// Agency Theme JavaScript

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    });
    
})(jQuery); // End of use strict
</script>
<script>
    $(window).scroll(function(){
       var vscroll = $(this).scrollTop();
       $("#logotext").css({
         "transform": "translate(0px, "+ vscroll/2 +" px )"
       });
    });
</script>
</body>
</html>		