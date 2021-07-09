<?php
require_once THEME_DIR .'/inc/classes/ThemeHeader.class.php';

$header = new ThemeHeader();

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<?php wp_head(); ?>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Google Font -->


    <!-- Css Styles -->
    
</head>

<body <?php body_class(); ?> >
			<?php wp_body_open(); ?>

   
   
			<!-- Header Section Begin -->
			<header class="header">
				<div class="top_header">
						<div class="container">
								<div class="row">
								<?php echo $header->get_logo(); ?>
								<?php echo $header->get_header_right(); ?>
								                  
										</div>
						</div>
					</div>		
								
						
			
	<div class="container">
	 <div class="row">
	 <?php echo $header->get_bottom_header(); ?>
	
		</div>
		</div>

		

</header>
				<!-- Header Section End -->