<?php	$acf_fields = get_field('footer', 'options');
							
$footer_logo = $acf_fields ['footer_logo']['url'];	
$network_url = $acf_fields ['network_url'];	
$icon_class = $acf_fields ['icon_class'];					
							?>
<!-- Footer Section Begin -->
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ">

							
							    <div class="footer__logo">
									<a href="./index.html"><img src="<?php echo $footer_logo ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
								<div class="footer__widget">
								<a href="<?php echo $network_url ?>"><i class="<?php echo $icon_class ?>"></i></a>
                    </div>
                </div>
            </div>
          </div>
    </footer>
    <!-- Footer Section End -->

    
    <!-- Search End -->

    <!-- Js Plugins -->
 

			<?php wp_footer(); ?>
</body>

</html>