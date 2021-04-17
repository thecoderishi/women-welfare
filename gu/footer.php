  
<script src="../assets/jquery/jquery-2.0.3.js"> </script>
<script src="../assets/bootstrap/dist/js/bootstrap.min.js"> </script>

<link rel="stylesheet" type="text/css" href="../css/footer_style.css">


<script>
$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
</script>


<a href="#top" id="toTop" class="scrollToTop" style="display:block;"></a>


<footer>
	
    <div class="container">
    	<div class="row">
        	<div class="col-md-6 col-sm-1 ftr-link">
                <li> <a href="#"> Home </a> </li>
                <li> <a href="#"> Login </a> </li>
                <li> <a href="#"> Feedback </a> </li>
				<li> <a href="#"> Home </a> </li>
            </div>
            <div class="col-md-6 col-sm-1 ftr-link">
            	<img src="">
            </div>
        </div><!---row--->
    </div> <!---container-->
    
</footer>

</body>
</html>