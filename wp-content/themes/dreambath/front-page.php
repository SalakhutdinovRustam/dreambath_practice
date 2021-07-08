<?php 
get_header();

?>
    <!-- Base Section Begin -->
<?php
$slider_data = get_field('banner_slider');

if (!empty($slider_data))
	$banner_title = ($slider_data['banner_title']);
	$slides = $slider_data['banner_slides'];
//	var_dump($slides);
	?>



    <section class="base_module">
        <div class="container">
            <div class="row">
                <div class="col m-auto ">
									<div class="banner_title">
										<h4><?php echo $banner_title ?></h4>
									</div>
								<div class="banner__slider owl-carousel">
								<?php foreach ($slides as $slide): ?>
                    <div class="banner__item">
                        <div class="banner__image">
                            <img src="<?php echo $slide['banner_image']['url'] ?>" alt="">
                        </div>
                    </div>
                    
										<?php endforeach; ?>   
                </div>
								
            </div>
        </div>
    </div>

		<?php
$customer_slider_data = get_field('customer_slider');

if (!empty($customer_slider_data))
	$customer_title = ($customer_slider_data['customer_title']);
	$customer_slides = $customer_slider_data['customer_slides'];

	?>
		<div class="container">
        <div class="row">
            <div class="col m-auto">
						 <div class="customer_title"> 
							<h4>Our happy customers:</h4> </div>
							   <div class="customer__slider owl-carousel">
								  <?php foreach ($customer_slides as $customer_slide): ?>
                    <div class="customer__item">
                       
												<div class="rating-result">
													<span class="active"></span>	
													<span class="active"></span>    
													<span class="active"></span>  
													<span class="active"></span>    
													<span class="active"></span>
												</div>
												<div class="customer__text">
                            <h5><?php echo $customer_slide['consumer_feedback'] ?></h5>
                            <p><?php echo $customer_slide['customer_name'] ?></p>
                        </div>
                    </div>
										<?php endforeach; ?>
                 </div>
            </div>
        </div>
    </div>
		<?php	$button_url = get_field('button_donate');
			$donate_title = get_field('donate_title');
	//	var_dump($button_url);
		?>
		
		<div class="container">
        <div class="row">
            <div class="col m-auto">
						  <div class="support_block">
							<div class="support_title"> 
							<p><?php echo $donate_title ?></p> 
						   </div>
							 <button href=<?php echo $button_url ?> class="btn">Donate us</button>
						     </div>
                </div>
						</div>
				</div>

</section>
<!-- Base Section End -->



<?php 
get_footer();
?>