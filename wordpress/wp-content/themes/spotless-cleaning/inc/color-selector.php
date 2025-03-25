<?php


//-----------------------------Site Identity Color----------------

	$spotless_cleaning_site_identity_color = get_theme_mod('spotless_cleaning_site_identity_color');
	$spotless_cleaning_site_identity_tagline_color = get_theme_mod('spotless_cleaning_site_identity_tagline_color');

	


//=====================Whole CSS===================================


	$custom_css ='.display_only h1 a,.display_only p{';
	
	$custom_css .='}';





//==============Main Setting Section===========================================


// ----------------Site Identity Color--------------------

	if($spotless_cleaning_site_identity_color != false){
		$custom_css .='.display_only h1 a{';
			if($spotless_cleaning_site_identity_color != false)
		    	$custom_css .='color: '.esc_html($spotless_cleaning_site_identity_color).'!important;';
		$custom_css .='}';
	}

	if($spotless_cleaning_site_identity_tagline_color != false){
		$custom_css .='.display_only p{';
			if($spotless_cleaning_site_identity_tagline_color != false)
		    	$custom_css .='color: '.esc_html($spotless_cleaning_site_identity_tagline_color).'!important;';
		$custom_css .='}';
	}



?>