<?php
// shortcode
function th_logo_shortcode ( $logo ) {

$logo = get_option(themehelper_logo);
$company_name = get_option(themehelper_companyname);
$home = home_url();
$output = "<a href='".$home."' alt='".$company_name." Logo'><img src='".$logo."'></a>";

return $output;
}

add_shortcode( 'themehelper_logo', 'th_logo_shortcode' );

function th_company_shortcode ( $atts ) {
	
  
 $company_name = get_option(themehelper_companyname);
 
 $output = "<span class='themehelper-company-name' id='themehelper-company-name'>".$company_name."</span>";
 
 return $output;
}

add_shortcode( 'themehelper_company_name', 'th_company_shortcode' );


function th_email_shortcode ( $atts ) {

$email = get_option(themehelper_email);
 $output = "<a href='mailto:".$email."'>".$email."</a>";

return $output;
 }

add_shortcode( 'themehelper_email', 'th_email_shortcode' );



function th_phone_shortcode ( $atts ) {

$phone = get_option(themehelper_phone);
 $output = "<a href='tel:".$phone."'>".$phone."</a>";

return $output;
 }

add_shortcode( 'themehelper_phone', 'th_phone_shortcode' );

function th_fax_shortcode ( $atts ) {

$fax = get_option(themehelper_fax);
 $output = "<span class='themehelper-fax' id='themehelper-fax'> ".$fax."</span>";

return $output;
 }

add_shortcode( 'themehelper_fax', 'th_fax_shortcode' );

function th_address_shortcode ( $atts ) {

 $address = get_option(themehelper_address);
 
 $output = "<span class='themehelper-address' id='themehelper-address'>".$address."</span>";
 
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
		
	wp_register_script( 'th_thehelper_color_switcher_js', plugin_dir_url( __FILE__ ) . '/js/themehelper-color-swicher.js' );
		wp_enqueue_script( 'th_thehelper_color_switcher_js' );	
		
		
					
				
}

add_action('wp_print_styles', 'th_themehelper_css');

function th_themehelper_admin_css($hook) {

wp_register_script( 'th_thehelper_js', plugin_dir_url( __FILE__ ) . '/js/themehelper-js.js' );
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

// switcher
function th_color_scheme (  ) {
	
	$th_color_scheme = get_option(themehelper_color);
	$body = get_option('th__body_color_scheme');
	
	$home = plugins_url();
	
	?>	

	<style id="themehelper-style"><?php	$th_color_scheme = get_option(themehelper_color);	?>
	<?php echo  get_option(themehelper_css_color_bg); ?> {	background-color: <?php echo $th_color_scheme['color_scheme_option']; ?> !important;	} <?php echo  get_option(themehelper_css_color_txt); ?> {	color: <?php echo $th_color_scheme['color_scheme_option']; ?> !important;	}
	.theme-helper a.themehelper-icon:hover, a.themehelper-icon.theme, .theme-helper .theme-helper-bg  {	background-color: <?php echo $th_color_scheme['color_scheme_option']; ?>; } .theme-helper .theme-helper-txt ( color:<?php echo $th_color_scheme['color_scheme_option']; ?>; )
	</style>
	
	<style>
	a.themehelper-icon { background-image: url("<?php echo  plugins_url( 'images/themehelper-sprite.png', __FILE__ ); ?>");  }
	</style>
	
<?php
 }

add_action( 'wp_footer', 'th_color_scheme' );



function th_color_scheme_switcher() {

$option1 = get_option(themehelper_color_option1); 
$option2 = get_option(themehelper_color_option2); 
$option3 = get_option(themehelper_color_option3); 
$option4 = get_option(themehelper_color_option4); 
$option5 = get_option(themehelper_color_option5); 

?>


  <div class="color-scheme-wrap">
<?php 
if (!$option1 == '') { 
 ?>
<div class="themehelper-color-switch" style="background-color:<?php echo $option1; ?>;"></div>
<?php
 }
if (!$option2 == '') { 
 ?>
<div class="themehelper-color-switch" style="background-color:<?php echo $option2; ?>"></div>
<?php
 }
if (!$option3 == '') { 
 ?>
<div class="themehelper-color-switch" style="background-color:<?php echo $option3; ?>"></div>
<?php
 }
if (!$option4 == '') { 
 ?>
<div class="themehelper-color-switch" style="background-color:<?php echo $option4; ?>"></div>
<?php
 }
if (!$option5 == '') { 
 ?>
<div class="themehelper-color-switch" style="background-color:<?php echo $option5; ?>"></div>
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
  jQuery( "#themehelper-style" ).html( " <?php echo  get_option(themehelper_css_color_bg); ?> { background-color:" +
	color + " !important; } <?php echo  get_option(themehelper_css_color_txt); ?> { color:" +
	color + "!important; } .theme-helper a.themehelper-icon:hover, a.themehelper-icon.theme, .theme-helper .theme-helper-bg { background-color:" +
	color + "; } .theme-helper-txt { color:" +
	color +	"; }" ).appendTo( "footer" );
});
</script>

	<?php
	}

if (get_option('th_activate_color_switcher') == 'th_activate_color_switcher') {

add_action('wp_footer','th_color_scheme_switcher');


}
?>