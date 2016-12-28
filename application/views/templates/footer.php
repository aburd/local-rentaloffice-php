  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="<?php echo asset_url(); ?>img/logo.png" alt="" /></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="twitter" href="https://twitter.com/servcorpjapan"><i class="fa fa-twitter"></i></a></li>
            <li><a class="facebook" href="https://www.facebook.com/ServcorpJapan/"><i class="fa fa-facebook"></i></a></li>
            <li><a class="instagram" href="https://www.instagram.com/servcorpjapan/"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2016 Servcorp Japan KK.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Crafted by Aaron</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC4bxmr-LyZOpfxryooXS54rp-9K2rAyjo"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/mousescroll.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script>
$(document).ready(function(){
	$('a.scroll').on('click', function() {
		$('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
		return false;
	});
})
</script>

<script>
	<?php echo "var locs = '" . json_encode($byArea) . "';"; ?>
	// console.log(JSON.parse(locs))
</script>

<?php
	if($extraScripts) {
		echo make_script_tags($extraScripts);
	}
?>
</body>
</html>
