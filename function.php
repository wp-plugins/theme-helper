<?php
// shortcode
function th_logo_shortcode ( $logo ) {

$logo = get_option(themehelper_logo);
$company_name = get_option(themehelper_companyname);
$home = home_url();
$output = "<a href='".$home."'><img  alt='".$company_name." Logo' src='".$logo."'></a>";

if ($logo){
return $output;
}
else {
	
}

}

add_shortcode( 'themehelper_logo', 'th_logo_shortcode' );

function th_secondary_logo_shortcode ( $logo ) {

$logo = get_option(themehelper_secondary_logo);
$company_name = get_option(themehelper_companyname);
$home = home_url();
$output = "<a href='".$home."' alt='".$company_name." Logo'><img src='".$logo."'></a>";

if ($logo){
return $output;
}
else {
	
}

}

add_shortcode( 'themehelper_secondary_logo', 'th_secondary_logo_shortcode' );

function th_banner1_shortcode ( $banner ) {

$banner_url = get_option(themehelper_url_banner1);
$banner = get_option(themehelper_banner1);

if ($banner_url && $banner) {
	$output = "<a id='theme-helper-banner1' class='theme-helper-banner' href=".$banner_url."><img src='".$banner."'></a>";
}
elseif ($banner) {
$output = "<img id='theme-helper-banner1' class='theme-helper-banner' src='".$banner."'>";	
}
else {
	
}
return $output;
}

add_shortcode( 'themehelper_banner1', 'th_banner1_shortcode' );


function th_banner2_shortcode ( $banner ) {

$banner_url = get_option(themehelper_url_banner2);
$banner = get_option(themehelper_banner2);


if ($banner_url && $banner) {
	$output = "<a id='theme-helper-banner1' class='theme-helper-banner' href=".$banner_url."><img src='".$banner."'></a>";
}
elseif ($banner) {
$output = "<img id='theme-helper-banner1' class='theme-helper-banner' src='".$banner."'>";	
}
else {
	
}
return $output;
}

add_shortcode( 'themehelper_banner2', 'th_banner2_shortcode' );



function th_company_shortcode ( $atts ) {
	
  
 $company_name = get_option(themehelper_companyname);
 if ($company_name) {
 $output = "<span class='theme-helper-company-name' id='theme-helper-company-name'>".$company_name."</span>";
 }
 return $output;
}

add_shortcode( 'themehelper_company_name', 'th_company_shortcode' );


function th_email_shortcode ( $atts ) {

$email = get_option(themehelper_email);
if ($email) {
$output = "<a id='theme-helper-email' class='theme-helper-email' href='mailto:".$email."'>".$email."</a>";
}
return $output;
 }

add_shortcode( 'themehelper_email', 'th_email_shortcode' );



function th_phone_shortcode ( $atts ) {

$phone = get_option(themehelper_phone);
if ($phone) {
$tel = get_option(themehelper_phone);
$trim = array(" ", "-", "(", ")");
$telno = str_replace($trim, "", $tel);
$output = "<a id='theme-helper-phone' class='theme-helper-phone' href='tel:".$telno."'>".$phone."</a>";
}
return $output;
 }

add_shortcode( 'themehelper_phone', 'th_phone_shortcode' );

function th_fax_shortcode ( $atts ) {

$fax = get_option(themehelper_fax);
if ($fax) {
 $output = "<span class='themehelper-fax' id='themehelper-fax'> ".$fax."</span>";
}
return $output;
 
 }

add_shortcode( 'themehelper_fax', 'th_fax_shortcode' );

function th_address_shortcode ( $atts ) {

 $address = get_option(themehelper_address);
 if ($address) {
 $output = "<span class='themehelper-address' id='themehelper-address'>".$address."</span>";
 }
 return $output;
 }

add_shortcode( 'themehelper_address', 'th_address_shortcode' );





function th_social_media_shortcode ( $atts ) {
	
	$option1 = get_option( 'themehelper_social_media1' );
	$option2 = get_option( 'themehelper_social_media2' );
	$option3 = get_option( 'themehelper_social_media3' );
	$option4 = get_option( 'themehelper_social_media4' );
	$option5 = get_option( 'themehelper_social_media5' );
	
	$sm_custom_icon1 = get_option('th_sm_icon1');
	$sm_custom_icon2 = get_option('th_sm_icon2');
	$sm_custom_icon3 = get_option('th_sm_icon3');
	$sm_custom_icon4 = get_option('th_sm_icon4');
	$sm_custom_icon5 = get_option('th_sm_icon5');
	

	
	$a = shortcode_atts(array(
	'size' => 'large',
	'size' => 'small',
	'size' => 'medium',
	
	'style' => 'circle',
	'style' => 'round',
	'style' => 'box',
	
	'color' => 'theme',
	'color' => 'light',	
	'color' => 'dark',
	
	), $atts);
	
		
	 
	$class_atts = $a['size'].' '.$a['style'].' '.$a['color'];
	
	
		if ($sm_custom_icon1) {
		$theme_helper_icon1 = "<img src='".get_option('th_sm_icon1')."'>";
	}
	else {
		$theme_helper_icon1 = $option1['sm_select1'];
	}

if ($sm_custom_icon2) {
		$theme_helper_icon2 = "<img src='".get_option('th_sm_icon2')."'>";
	}
	else {
		$theme_helper_icon2 = $option2['sm_select2'];
	}
if ($sm_custom_icon3) {
		$theme_helper_icon3 = "<img src='".get_option('th_sm_icon3')."'>";
	}
	else {
		$theme_helper_icon3 = $option3['sm_select3'];
	}	
	if ($sm_custom_icon4) {
		$theme_helper_icon4 = "<img src='".get_option('th_sm_icon4')."'>";
	}
	else {
		$theme_helper_icon4 = $option4['sm_select4'];
	}
if ($sm_custom_icon5) {
		$theme_helper_icon5 = "<img src='".get_option('th_sm_icon5')."'>";
	}
	else {
		$theme_helper_icon5 = $option5['sm_select5'];
	}
	
	if (get_option(themehelper_social_media_url1)) {
$social_media_url1 = get_option(themehelper_social_media_url1);
$sm_output1 = "<a href='".$social_media_url1."' target='_blank'  class='themehelper-icon ".$option1['sm_select1']." ".$class_atts."'>".$theme_helper_icon1."</a>";
	}
	if (get_option(themehelper_social_media_url2)) {
$social_media_url2 = get_option(themehelper_social_media_url2);
$sm_output2 = "<a href='".$social_media_url2."' target='_blank' class='themehelper-icon ".$option2['sm_select2']." ".$class_atts."'>".$theme_helper_icon2."</a>";
	}
	if (get_option(themehelper_social_media_url3)) {
$social_media_url3 = get_option(themehelper_social_media_url3);
$sm_output3 = "<a href='".$social_media_url3."' target='_blank' class='themehelper-icon ".$option3['sm_select3']." ".$class_atts."'>".$theme_helper_icon3."</a>";
	}
	if (get_option(themehelper_social_media_url4)) {
$social_media_url4 = get_option(themehelper_social_media_url4);
$sm_output4 = "<a href='".$social_media_url4."' target='_blank' class='themehelper-icon ".$option4['sm_select4']." ".$class_atts."'>".$theme_helper_icon4."</a>";
	}
	if (get_option(themehelper_social_media_url5)) {
$social_media_url5 = get_option(themehelper_social_media_url5);
$sm_output5 = "<a href='".$social_media_url5."' target='_blank' class='themehelper-icon ".$option5['sm_select5']." ".$class_atts."'>".$theme_helper_icon5."</a>";
	}
	
	$sm_output = $sm_output1.$sm_output2.$sm_output3.$sm_output4.$sm_output5;
	
return $sm_output;
 }

add_shortcode( 'themehelper_social_media', 'th_social_media_shortcode' );

// register
function th_themehelper_css() {

wp_register_style( 'th_themehelper_css', plugin_dir_url( __FILE__ ) . 'css/themehelper-css.css' );
        wp_enqueue_style( 'th_themehelper_css' );
		
				
}

add_action('wp_print_styles', 'th_themehelper_css');



function th_themehelper_admin_css($hook) {

wp_register_script( 'th_thehelper_js', plugin_dir_url( __FILE__ ) . 'js/themehelper-js.js' );
    wp_enqueue_script( 'th_thehelper_js' );
	
	wp_register_style( 'th_themehelper_admin_css', plugin_dir_url( __FILE__ ) . 'css/themehelper-admin-css.css' );
        wp_enqueue_style( 'th_themehelper_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'th_themehelper_admin_css' );


//body class
function th_body_class($classes) {
	$classes[]= 'theme-helper';
	return $classes;
}
add_filter('body_class', 'th_body_class');


function th_color_scheme () {
	
	$th_color_scheme = get_option(themehelper_color);
	$body = get_option('th__body_color_scheme');


// switcher

// The value to compare with (the value of the checkbox below).
$option1 = get_option(themehelper_color_option1); 
$option2 = get_option(themehelper_color_option2); 
$option3 = get_option(themehelper_color_option3); 
$option4 = get_option(themehelper_color_option4); 
$option5 = get_option(themehelper_color_option5);

if ($th_color_scheme[color_scheme_option] == $option1) {
	$light_color_scheme = get_option(themehelper_color_option1_light);
	$dark_color_scheme = get_option(themehelper_color_option1_dark);
}
elseif ($th_color_scheme[color_scheme_option] == $option2) {
	$light_color_scheme = get_option(themehelper_color_option2_light);
	$dark_color_scheme = get_option(themehelper_color_option2_dark);
}
elseif ($th_color_scheme[color_scheme_option] == $option3) {
	$light_color_scheme = get_option(themehelper_color_option3_light);
	$dark_color_scheme = get_option(themehelper_color_option3_dark);
}
elseif ($th_color_scheme[color_scheme_option] == $option4) {
	$light_color_scheme = get_option(themehelper_color_option4_light);
	$dark_color_scheme = get_option(themehelper_color_option4_dark);
}
elseif ($th_color_scheme[color_scheme_option] == $option5) {
	$light_color_scheme = get_option(themehelper_color_option5_light);
	$dark_color_scheme = get_option(themehelper_color_option5_dark);
}

	
	$home = plugins_url();
	
	?>	
	<style id="themehelper-style">
	<?php echo  get_option(themehelper_css_color_bg); ?> {	background-color: <?php echo $th_color_scheme['color_scheme_option']; ?> !important;	}	<?php echo  get_option(themehelper_css_color_bg_light); ?> {	background-color: <?php echo $light_color_scheme; ?> !important;	}	<?php echo  get_option(themehelper_css_color_bg_dark); ?> {	background-color: <?php echo $dark_color_scheme; ?> !important;	}	<?php echo  get_option(themehelper_css_color_txt); ?> {	color: <?php echo $th_color_scheme['color_scheme_option']; ?> !important;	} 	<?php echo  get_option(themehelper_css_color_txt_light); ?> {	color: <?php echo $light_color_scheme; ?> !important;	} 	<?php echo  get_option(themehelper_css_color_txt_dark); ?> {	color: <?php echo $dark_color_scheme; ?> !important;	} 	<?php echo  get_option(themehelper_css_color_border); ?> {	border-color: <?php echo $th_color_scheme['color_scheme_option']; ?> !important;	}	<?php echo  get_option(themehelper_css_color_border_light); ?> {	border-color: <?php echo $light_color_scheme; ?> !important;	}	<?php echo  get_option(themehelper_css_color_border_dark); ?> {	border-color: <?php echo $dark_color_scheme; ?> !important;	}	.theme-helper a.themehelper-icon:hover, a.themehelper-icon.theme, .theme-helper .theme-helper-bg  {	background-color: <?php echo $th_color_scheme['color_scheme_option']; ?>; } 	.theme-helper .theme-helper-bg-light  {	background-color: <?php echo $light_color_scheme; ?>; }	.theme-helper .theme-helper-bg-dark  {	background-color: <?php echo $dark_color_scheme; ?>; }	.theme-helper .theme-helper-txt { color:<?php echo $th_color_scheme['color_scheme_option']; ?>; }	.theme-helper .theme-helper-txt-light { color:<?php echo $light_color_scheme; ?>; }	.theme-helper .theme-helper-txt-dark { color:<?php echo $dark_color_scheme; ?>; }	.theme-helper .theme-helper-border { border-color:<?php echo $th_color_scheme['color_scheme_option']; ?>; }	.theme-helper .theme-helper-border-light { border-color:<?php echo $light_color_scheme; ?>; }		.theme-helper .theme-helper-border-dark { border-color:<?php echo $dark_color_scheme; ?>; }
	</style>
	<style>	a.themehelper-icon { background-image: url("<?php echo  plugins_url( 'images/themehelper-sprite.png', __FILE__ ); ?>");  }	</style>
	
<?php
	
 }

add_action( 'wp_head', 'th_color_scheme' );



function th_color_scheme_switcher() {

$th_color_scheme = get_option(themehelper_color);

$option1 = get_option(themehelper_color_option1); 
$option2 = get_option(themehelper_color_option2); 
$option3 = get_option(themehelper_color_option3); 
$option4 = get_option(themehelper_color_option4); 
$option5 = get_option(themehelper_color_option5); 


if ($th_color_scheme[color_scheme_option] == $option1) {
	$light_color_scheme = get_option(themehelper_color_option1_light);
	$dark_color_scheme = get_option(themehelper_color_option1_dark);
}
elseif ($th_color_scheme[color_scheme_option] == $option2) {
	$light_color_scheme = get_option(themehelper_color_option2_light);
	$dark_color_scheme = get_option(themehelper_color_option2_dark);
}
elseif ($th_color_scheme[color_scheme_option] == $option3) {
	$light_color_scheme = get_option(themehelper_color_option3_light);
	$dark_color_scheme = get_option(themehelper_color_option3_dark);
}
elseif ($th_color_scheme[color_scheme_option] == $option4) {
	$light_color_scheme = get_option(themehelper_color_option4_light);
	$dark_color_scheme = get_option(themehelper_color_option4_dark);
}
elseif ($th_color_scheme[color_scheme_option] == $option5) {
	$light_color_scheme = get_option(themehelper_color_option5_light);
	$dark_color_scheme = get_option(themehelper_color_option5_dark);
}

?>


  <div class="color-scheme-wrap">
<?php 
if (!$option1 == '') { 
 ?>
<div class="themehelper-color-switch" style="background-color:<?php echo $option1; ?>; color:<?php echo get_option(themehelper_color_option1_light); ?>; outline-color:<?php echo get_option(themehelper_color_option1_dark); ?>;"></div>
<?php
 }
if (!$option2 == '') { 
 ?>
<div class="themehelper-color-switch" style="background-color:<?php echo $option2; ?>; color:<?php echo get_option(themehelper_color_option2_light); ?>; outline-color:<?php echo get_option(themehelper_color_option2_dark); ?>;"></div>
<?php
 }
if (!$option3 == '') { 
 ?>
<div class="themehelper-color-switch" style="background-color:<?php echo $option3; ?>; color:<?php echo get_option(themehelper_color_option3_light); ?>; outline-color:<?php echo get_option(themehelper_color_option3_dark); ?>;"></div>
<?php
 }
if (!$option4 == '') { 
 ?>
<div class="themehelper-color-switch" style="background-color:<?php echo $option4; ?>; color:<?php echo get_option(themehelper_color_option4_light); ?>; outline-color:<?php echo get_option(themehelper_color_option4_dark); ?>;"></div>
<?php
 }
if (!$option5 == '') { 
 ?>
<div class="themehelper-color-switch" style="background-color:<?php echo $option5; ?>; color:<?php echo get_option(themehelper_color_option5_light); ?>; outline-color:<?php echo get_option(themehelper_color_option5_dark); ?>;"></div>
 </div>  
 <?php
 } 
 ?>

 
<?php
$htmlatt = get_option(th_html_attribute);
?>
	
 <script>
jQuery( ".themehelper-color-switch" ).click(function() {
  var color = jQuery( this ).css( "background-color" );
  var light = jQuery( this ).css( "color" );
  var dark = jQuery( this ).css( "outline-color" );
  jQuery( "#themehelper-style" ).html( " <?php echo  get_option(themehelper_css_color_bg); ?> { background-color:" +
	color + " !important; } <?php echo  get_option(themehelper_css_color_bg_light); ?> { background-color:" +
	light + " !important; } <?php echo  get_option(themehelper_css_color_bg_dark); ?> { background-color:" +
	dark + " !important; } <?php echo  get_option(themehelper_css_color_txt); ?> { color:" +
	color + " !important; } <?php echo  get_option(themehelper_css_color_txt_light); ?> { color:" +
	light + " !important; } <?php echo  get_option(themehelper_css_color_txt_dark); ?> { color:" +
	dark + " !important; } <?php echo  get_option(themehelper_css_color_border); ?> { border-color:" +
	color + " !important; } <?php echo  get_option(themehelper_css_color_border_light); ?> { border-color:" +
	light + " !important; } <?php echo  get_option(themehelper_css_color_border_dark); ?> { border-color:" +
	dark + "!important; } .theme-helper a.themehelper-icon:hover, a.themehelper-icon.theme, .theme-helper .theme-helper-bg { background-color:" +
	color + "; } .theme-helper-bg-light { background-color:" +
	light + "; } .theme-helper-bg-dark { background-color:" +
	dark + "; } .theme-helper-txt { color:" +
	color + "; } .theme-helper-txt-light { color:" +
	light + "; } .theme-helper-txt-dark { color:" +
	dark + "; } .theme-helper-border { border-color:" +
	color + "; } .theme-helper-border-light { border-color:" +
	light + "; } .theme-helper-border-dark { border-color:" +
	dark +	"; }" ).appendTo( "footer" );
});
</script>

<script>
jQuery( ".search-form input[type='search']" ).addClass( "search-box" );
jQuery( ".search-form input[type='text']" ).addClass( "search-box" );
jQuery( ".search-form input[type='submit']" ).addClass( "search-button" );
</script>

	<?php
	}

if (get_option('th_activate_color_switcher') == 'th_activate_color_switcher') {

add_action('wp_footer','th_color_scheme_switcher');

}

// contact form 7 


add_filter( 'wpcf7_form_elements', 'mycustom_wpcf7_form_elements' );

function mycustom_wpcf7_form_elements( $form ) {
	$form = do_shortcode( $form );

	return $form;
}

?>