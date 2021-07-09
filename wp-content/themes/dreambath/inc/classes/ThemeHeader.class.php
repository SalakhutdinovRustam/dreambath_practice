<?php
class ThemeHeader {
	public $acf_fields;

	function __construct() {
		$this->acf_fields = get_field('header', 'options');
	}
/**
	 * Logo
	 */
	function get_logo() {
		$logo_url = home_url('/');
		$logo_image = $this->acf_fields['logo']['url'];
		$greetings_enter = $this->acf_fields['greeting']['enter'];
		$greetings_numb = $this->acf_fields['greeting']['numb'];
		$greetings_dream = $this->acf_fields['greeting']['dream'];

		$block = <<<HTML
<div class="col-lg-6">
	<div class="header_greetings">
		<div class="header__logo">
				<a href="{$logo_url}"><img src="{$logo_image}" alt="logo"></a>
			</div>
			<div class="greetings_desc">
				<div class="greetings_enter">
					<h3>{$greetings_enter}</h3>
				</div>
				<div class="greetings_numb">
					<h2>{$greetings_numb}</h2>
				</div>
				<div class="greetings_dream">
					<h4>{$greetings_dream}</h4>
				</div>
			</div>
		</div>
		</div>
HTML;

		return $block;
	}

/**
	 * Header_right
	 */
	function get_header_right() {
		
		$header_phone = $this->acf_fields['phone'];
		$contact_title = $this->acf_fields['contact_content']['contact_title'];
		$contact_subtitle = $this->acf_fields['contact_content']['contact_subtitle'];
		$contact_form = $this->acf_fields['contact_content']['contact_form'];
		
		$block = <<<HTML
	<div class="col-lg-6">
			<div class="header_form">
				<div class="header_phone">
					<a href="#">{$header_phone}</a>
				</div>
			</div>

			<div class="contact__content">
				<div class="contact__title">
					<h5>{$contact_title}</h5>
					<h6>{$contact_subtitle}</h6>
					</div>
						<form action="#">
					{$contact_form}
				</form>		
			</div>
	</div>
HTML;

		return $block;
	}

/**
	 * Header_bottom
	 */
	function get_bottom_header() {
		
		$discount_text = $this->acf_fields['discount_text'];
		$countdown_day = $this->acf_fields['countdown_day'];
		
		$block = <<<HTML
			<div class="col-lg-6">
			<div class="bottom-header">
				<div class="discount">
				<div class="discount_text">
					<p>{$discount_text}</p>
				</div>
			<div class="discount__countdown" id="countdown-time" data-final-date="{$countdown_day}">
			
		  </div>
		 </div>
		</div>
		</div>
HTML;

		return $block;
	}



}