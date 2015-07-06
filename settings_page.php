<?php 

// theme helper menu

add_action('admin_menu', 'th_themehelper_menu');

function th_themehelper_menu() {


 add_menu_page('theme helper admin menu', 'Theme Helper', 'administrator', __FILE__, 'th_themehelper_settings_page',plugins_url('/images/themehelper-icon.png', __FILE__), 6.5);

}

// register settings
function th_themehelper_register_settings() {

register_setting( 'th_themehelper_settings_group', 'themehelper_logo' );
register_setting( 'th_themehelper_settings_group', 'themehelper_secondary_logo' );
register_setting( 'th_themehelper_settings_group', 'themehelper_companyname' );
register_setting( 'th_themehelper_settings_group', 'themehelper_email' );
register_setting( 'th_themehelper_settings_group', 'themehelper_phone' );
register_setting( 'th_themehelper_settings_group', 'themehelper_fax' );

register_setting( 'th_themehelper_settings_group', 'themehelper_address' );
register_setting( 'th_themehelper_settings_group', 'themehelper_color' );
register_setting( 'th_themehelper_settings_group', 'themehelper_color_option1' );
register_setting( 'th_themehelper_settings_group', 'themehelper_color_option2' );
register_setting( 'th_themehelper_settings_group', 'themehelper_color_option3' );
register_setting( 'th_themehelper_settings_group', 'themehelper_color_option4' );
register_setting( 'th_themehelper_settings_group', 'themehelper_color_option5' );

register_setting( 'th_themehelper_settings_group', 'th_activate_color_switcher' );
register_setting( 'th_themehelper_settings_group', 'themehelper_css_color_bg' );
register_setting( 'th_themehelper_settings_group', 'themehelper_css_color_txt' );

register_setting( 'th_themehelper_settings_group', 'themehelper_social_media1' );
register_setting( 'th_themehelper_settings_group', 'themehelper_social_media_url1' );
register_setting( 'th_themehelper_settings_group', 'themehelper_social_media2' );
register_setting( 'th_themehelper_settings_group', 'themehelper_social_media_url2' );
register_setting( 'th_themehelper_settings_group', 'themehelper_social_media3' );
register_setting( 'th_themehelper_settings_group', 'themehelper_social_media_url3' );
register_setting( 'th_themehelper_settings_group', 'themehelper_social_media4' );
register_setting( 'th_themehelper_settings_group', 'themehelper_social_media_url4' );
register_setting( 'th_themehelper_settings_group', 'themehelper_social_media5' );
register_setting( 'th_themehelper_settings_group', 'themehelper_social_media_url5' );

register_setting( 'th_themehelper_settings_group', 'th_sm_icon1' );
register_setting( 'th_themehelper_settings_group', 'th_sm_icon2' );
register_setting( 'th_themehelper_settings_group', 'th_sm_icon3' );
register_setting( 'th_themehelper_settings_group', 'th_sm_icon4' );
register_setting( 'th_themehelper_settings_group', 'th_sm_icon5' );

register_setting( 'th_themehelper_settings_group', 'th_use_custom_icon' );

register_setting( 'th_themehelper_settings_group', 'themehelper_banner1' );
register_setting( 'th_themehelper_settings_group', 'themehelper_banner2' );


}

add_action( 'admin_init', 'th_themehelper_register_settings' );




// theme helper settings page

function th_themehelper_settings_page() {
	$th_color_scheme = get_option(themehelper_color);
	?>
	
	<style>
input.color-box.color-box-option1 {
	background-color:<?php echo get_option(themehelper_color_option1); ?>;
}
input.color-box.color-box-option2 {
	background-color:<?php echo get_option(themehelper_color_option2); ?>;
}
input.color-box.color-box-option3 {
	background-color:<?php echo get_option(themehelper_color_option3); ?>;
}
input.color-box.color-box-option4 {
	background-color:<?php echo get_option(themehelper_color_option4); ?>;
}
input.color-box.color-box-option5 {
	background-color:<?php echo get_option(themehelper_color_option5); ?>;
}
.themehelper-plugin-container.themehelper-plugin-fulltitle {
	background-color:<?php echo $th_color_scheme['color_scheme_option']; ?>;
}
.tab-links a { background-image: url("<?php echo  plugins_url( 'images/admin-themehelper-icon.png', __FILE__ ); ?>");  }
.themehelper-container h2, li.active a, li.active a:hover, .tab-links a:hover, .themehelper-title h1 span { color:<?php echo $th_color_scheme['color_scheme_option']; ?>; }

</style>

<form method="post" action="options.php">

    <?php settings_fields( 'th_themehelper_settings_group' ); ?>

    <?php do_settings_sections( 'th_themehelper_settings_group' ); ?>
	

<?php
// jQuery
wp_enqueue_script('jquery');
// This will enqueue the Media Uploader script
wp_enqueue_media();
?>




<div class="themehelper-wrap">

<div class="themehelper-header">
<div class="themehelper-title"> <h1> <span> THEME </span> HELPER </h1> </div>
<div class="themehelper-header-link">  <a target="_blank" href="">  FAQ </a> | <a target="_blank" href="">  Support Forum </a>  </div>
<div class="themehelper-donation"> <a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=NAX45XQV5P7ZW"> <img src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"> </a> </div>
</div>

<div class="themehelper-header-save">  <?php submit_button(); ?> </div>

<div class="clear-both"> </div>

<div class="themehelper-content">

	<div class="th-tabs">
<ul class="tab-links">
        <li class="active th-menu-logo"><a href="#tab1"> LOGO</a></li>
        <li class="th-menu-deatils"><a href="#tab2"> DETAILS</a></li>
        <li class="th-menu-color"><a href="#tab3"> COLOR SCHEME</a></li>
        <li class="th-menu-sm"><a href="#tab4"> SOCIAL MEDIA </a></li>
		<li class="th-menu-banner"><a href="#tab5"> BANNER </a></li>
    </ul>
	

	<div class="tab-content">
        <div id="tab1" class="tab active">
		
<div class="themehelper-container">		
		<h2>  LOGO </h2>
		</div>
		
<div class="themehelper-container">
	
	<h3> Primary Logo </h3>

	<p> Shortcode: [themehelper_logo] </p>
  <input type="text" name="themehelper_logo" id="themehelper_logo" class="regular-text" value="<?php  echo get_option('themehelper_logo'); ?>">
    <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Upload Image">
			<div class="themehelper-img">
	<?php
	if (!get_option('themehelper_logo') == '') {
	?>
	<img id="themehelper_logo" src="<?php  echo get_option('themehelper_logo'); ?>">
	<?php 
	}
	?>
	</div>
	</div>
	
        
	<div class="themehelper-container">	
		<h3> Secondary Logo </h3> 
<p> Shortcode: [themehelper_secondary_logo] </p>		
  <input type="text" name="themehelper_secondary_logo" id="themehelper_secondary_logo" class="regular-text" value="<?php  echo get_option('themehelper_secondary_logo'); ?>">
    <input type="button" name="upload-second-btn" id="upload-second-btn" class="button-secondary" value="Upload Image">
		<div class="themehelper-img">
	<?php
	if (!get_option('themehelper_secondary_logo') == '') {
	?>
	<img id="themehelper_secondary_logo" src="<?php  echo get_option('themehelper_secondary_logo'); ?>">
	<?php 
	}
	?>
	</div>
	</div>
	
        </div>

        <div id="tab2" class="tab">

		<div class="themehelper-container">
		<h2> Company Details </h2>
		</div>
		
		<div class="themehelper-container">
	<div class="theme helper-col"> <b> Details: </b> </div>
	<div class="theme helper-col"> <b> Fields </b> </div>
	<div class="theme helper-col">	<b> Shortcode  </b> </div>
</div>

<div class="themehelper-container">
	<div class="theme helper-col"> Company Name: </div>
	<div class="theme helper-col"> <input type="text" name="themehelper_companyname" value="<?php echo get_option('themehelper_companyname'); ?>"> </div>
	<div class="theme helper-col">	[themehelper_company_name] </div>
</div>

<div class="themehelper-container">
	<div class="theme helper-col"> Email Address: </div>
	<div class="theme helper-col"> <input type="text" name="themehelper_email" value="<?php echo get_option('themehelper_email'); ?>"> </div>
	<div class="theme helper-col">	[themehelper_email] </div>
</div>
	
<div class="themehelper-container">	
	<div class="theme helper-col"> Phone: </div>
	<div class="theme helper-col"> <input type="text" name="themehelper_phone" value="<?php echo get_option('themehelper_phone'); ?>"> </div>
	<div class="theme helper-col">	[themehelper_phone] </div>
</div>	

<div class="themehelper-container">	
	<div class="theme helper-col"> Fax: </div>
	<div class="theme helper-col"> <input type="text" name="themehelper_fax" value="<?php echo get_option('themehelper_fax'); ?>"> </div>
	<div class="theme helper-col">	[themehelper_fax] </div>
</div>	
	
<div class="themehelper-container">
	<div class="theme helper-col"> Address: </div>
	<div class="theme helper-col"> <textarea  name="themehelper_address"> <?php echo get_option('themehelper_address'); ?> </textarea>  </div>
	<div class="theme helper-col">	[themehelper_address] </div>
</div>	

        </div>

        <div id="tab3" class="tab">
          
		  <div class="themehelper-container">
		  <h2> Color Scheme </h2>
		  </div>
		  
		  <div class="themehelper-container">
<p>  <input type="checkbox" name="th_activate_color_switcher" value="th_activate_color_switcher" <?php echo "th_activate_color_switcher" == get_option('th_activate_color_switcher') ? 'checked="checked"' : '' ?> />
Activate Color Scheme Switcher in Frontend 
</p>
</div>




<?php

// Get an array of options from the database.
$options = get_option( 'themehelper_color' );

// Get the value of this option.
$checked = $options['color_scheme_option'];

// The value to compare with (the value of the checkbox below).
$option1 = get_option(themehelper_color_option1); 
$option2 = get_option(themehelper_color_option2); 
$option3 = get_option(themehelper_color_option3); 
$option4 = get_option(themehelper_color_option4); 
$option5 = get_option(themehelper_color_option5); 

// True by default, just here to make things clear.
$echo = true;
 
 ?>
 
 <h3> Select Default Color Scheme </h3>
 
 <div class="themehelper-container">

 
<div class="color-box-container">
<input type="radio" name="themehelper_color[color_scheme_option]" value="<?php echo get_option(themehelper_color_option1); ?>" class="color-box color-box-option1" <?php checked( $checked, $option1, $echo ); ?>> 
<input type="text" name="themehelper_color_option1" value="<?php echo get_option(themehelper_color_option1); ?>" class="color-box-field">
</div>



<div class="color-box-container">
<input type="radio" name="themehelper_color[color_scheme_option]" value="<?php echo get_option(themehelper_color_option2); ?>" class="color-box color-box-option2" <?php checked( $checked, $option2, $echo ); ?>> 
<input type="text" name="themehelper_color_option2" value="<?php echo get_option(themehelper_color_option2); ?>" class="color-box-field">
</div>

<div class="color-box-container">
<input type="radio" name="themehelper_color[color_scheme_option]" value="<?php echo get_option(themehelper_color_option3); ?>" class="color-box color-box-option3" <?php checked( $checked, $option3, $echo ); ?> > 
<input type="text" name="themehelper_color_option3" value="<?php echo get_option(themehelper_color_option3); ?>" class="color-box-field">
</div>

<div class="color-box-container">
<input type="radio" name="themehelper_color[color_scheme_option]" value="<?php echo get_option(themehelper_color_option4); ?>" class="color-box color-box-option4" <?php checked( $checked, $option4, $echo ); ?> > 
<input type="text" name="themehelper_color_option4" value="<?php echo get_option(themehelper_color_option4); ?>" class="color-box-field">
</div>

<div class="color-box-container">
<input type="radio" name="themehelper_color[color_scheme_option]" value="<?php echo get_option(themehelper_color_option5); ?>" class="color-box color-box-option5" <?php checked( $checked, $option5, $echo ); ?> > 
<input type="text" name="themehelper_color_option5" value="<?php echo get_option(themehelper_color_option5); ?>" class="color-box-field">
</div>


</div>


<h3> CSS Switcher Option </h3>

 <div class="themehelper-container">
<h4> Background Color Switcher </h4>
<p> Control your Background Color Scheme by adding only the CSS Property here. Example " .site-header, .site-footer " </p>
<textarea name="themehelper_css_color_bg" class="themehelper-textarea"> <?php echo  get_option(themehelper_css_color_bg); ?> </textarea>
</div>

 <div class="themehelper-container">
<h4> Text Color Switcher </h4>
<p> Control your Text Color Scheme by adding only the CSS Property here. Example " body, h1, h2, h3, h4, h5, h6, p " </p>
<textarea name="themehelper_css_color_txt" class="themehelper-textarea"> <?php echo  get_option(themehelper_css_color_txt); ?> </textarea>
</div>
		  
		  
        </div>

        <div id="tab4" class="tab">
		
		
 <div class="themehelper-container">	
	<h2> Social Media </h2>
		</div>

	
 <div class="themehelper-container">

<p>  <input type="checkbox" name="th_use_custom_icon" value="th_use_custom_icon" <?php echo "th_use_custom_icon" == get_option('th_use_custom_icon') ? 'checked="checked"' : '' ?> />
Use/Upload custom icon 
</p>
	
	<p> Shortcode: [themehelper_social_media style="box" color="dark"] See Faq for more list of shortcode attributes. </p>

</div>	
	<?php
	// Get an array of options from the database.
$option1 = get_option( 'themehelper_social_media1' );
$option2 = get_option( 'themehelper_social_media2' );
$option3 = get_option( 'themehelper_social_media3' );
$option4 = get_option( 'themehelper_social_media4' );
$option5 = get_option( 'themehelper_social_media5' );

$th_fb = 'themehelper-facebook';
$th_twitter = 'themehelper-twitter';
$th_linkedin = 'themehelper-linkedin';
$th_youtube = 'themehelper-youtube';
$th_google = 'themehelper-google';
$th_instagram = 'themehelper-instagram';
$th_blogs = 'themehelper-blogs';
$th_rss = 'themehelper-rss';
$th_flickr = 'themehelpe-flickr';
$th_pinterest = 'themehelper-pinterest';
$th_vimeo = 'themehelper-vimeo';
$th_thumbler = 'themehelper-thumbler';
$th_custom1 = 'themehelper-icon1';
$th_custom2 = 'themehelper-icon2';
$th_custom3 = 'themehelper-icon3';
$th_custom4 = 'themehelper-icon4';
$th_custom5 = 'themehelper-icon5';
	?>
	
<div class="themehelper-social-media-container">	
	<div class="col2">
	<select name="themehelper_social_media1[sm_select1]"> 
	<option>  </option>
	<option  value="<?php echo $th_fb; ?>" <?php selected( $option1['sm_select1'], $th_fb ); ?>> Facebook  </option>
	<option value="<?php echo $th_twitter; ?>" <?php selected( $option1['sm_select1'], $th_twitter ); ?>> Twitter  </option>
	<option value="<?php echo $th_linkedin; ?>" <?php selected( $option1['sm_select1'], $th_linkedin ); ?>> Linkedin  </option>
	<option value="<?php echo $th_youtube; ?>" <?php selected( $option1['sm_select1'], $th_youtube ); ?>> Youtube </option>
	<option value="<?php echo $th_google; ?>" <?php selected( $option1['sm_select1'], $th_google ); ?>> Google  </option>
	<option value="<?php echo $th_instagram; ?>" <?php selected( $option1['sm_select1'], $th_instagram ); ?>> Instagram  </option>
	<option value="<?php echo $th_blogs; ?>" <?php selected( $option1['sm_select1'], $th_blogs ); ?>> Blogs  </option>
	<option value="<?php echo $th_rss; ?>" <?php selected( $option1['sm_select1'], $th_rss ); ?>> Rss  </option>
	<option value="<?php echo $th_flickr; ?>" <?php selected( $option1['sm_select1'], $th_flickr ); ?>> Flickr  </option>
	<option value="<?php echo $th_pinterest; ?>" <?php selected( $option1['sm_select1'], $th_pinterest ); ?>> Pinterest  </option>
	<option value="<?php echo $th_vimeo; ?>" <?php selected( $option1['sm_select1'], $th_vimeo ); ?>> Vimeo  </option>
	<option value="<?php echo $th_thumbler; ?>" <?php selected( $option1['sm_select1'], $th_thumbler ); ?>> Thumbler  </option>
	<option value="<?php echo $th_custom1; ?>" <?php selected( $option1['sm_select1'], $th_custom1 ); ?>> Custom Icon  </option>
	</select>
	</div>
	<div class="col22">
	<input type="text" name="themehelper_social_media_url1" class="regular-text" value="<?php echo get_option(themehelper_social_media_url1); ?>">	
	</div>	
	<?php if (get_option(th_use_custom_icon) == "th_use_custom_icon") { ?>
<div class="col2">
<input type="button" name="upload-sm-icon1" id="upload-sm-icon1" class="button-secondary" value="Select Image">
	</div>
	<div class="col22">
	<input type="text" name="th_sm_icon1" id="th_sm_icon1" class="regular-text" value="<?php  echo get_option('th_sm_icon1'); ?>">
</div>
	<?php } ?>
	</div>
	
	
<div class="themehelper-social-media-container">	
	<div class="col2">
	<select name="themehelper_social_media2[sm_select2]"> 
	<option>  </option>
	<option  value="<?php echo $th_fb; ?>" <?php selected( $option2['sm_select2'], $th_fb ); ?>> Facebook  </option>
	<option value="<?php echo $th_twitter; ?>" <?php selected( $option2['sm_select2'], $th_twitter ); ?>> Twitter  </option>
	<option value="<?php echo $th_linkedin; ?>" <?php selected( $option2['sm_select2'], $th_linkedin ); ?>> Linkedin  </option>
	<option value="<?php echo $th_youtube; ?>" <?php selected( $option2['sm_select2'], $th_youtube ); ?>> Youtube </option>
	<option value="<?php echo $th_google; ?>" <?php selected( $option2['sm_select2'], $th_google ); ?>> Google  </option>
	<option value="<?php echo $th_instagram; ?>" <?php selected( $option2['sm_select2'], $th_instagram ); ?>> Instagram  </option>
	<option value="<?php echo $th_blogs; ?>" <?php selected( $option2['sm_select2'], $th_blogs ); ?>> Blogs  </option>
	<option value="<?php echo $th_rss; ?>" <?php selected( $option2['sm_select2'], $th_rss ); ?>> Rss  </option>
	<option value="<?php echo $th_flickr; ?>" <?php selected( $option2['sm_select2'], $th_flickr ); ?>> Flickr  </option>
	<option value="<?php echo $th_pinterest; ?>" <?php selected( $option2['sm_select2'], $th_pinterest ); ?>> Pinterest  </option>
	<option value="<?php echo $th_vimeo; ?>" <?php selected( $option2['sm_select2'], $th_vimeo ); ?>> Vimeo  </option>
	<option value="<?php echo $th_thumbler; ?>" <?php selected( $option2['sm_select2'], $th_thumbler ); ?>> Thumbler  </option>
	<option value="<?php echo $th_custom2; ?>" <?php selected( $option2['sm_select2'], $th_custom2 ); ?>> Custom Icon  </option>
	</select>
	</div>
	<div class="col22">
	<input type="text" name="themehelper_social_media_url2" class="regular-text" value="<?php echo get_option(themehelper_social_media_url2); ?>">	
	</div>	
	<?php if (get_option(th_use_custom_icon) == "th_use_custom_icon") { ?>
<div class="col2">
<input type="button" name="upload-sm-icon2" id="upload-sm-icon2" class="button-secondary" value="Select Image">
	</div>
	<div class="col22">
	<input type="text" name="th_sm_icon2" id="th_sm_icon2" class="regular-text" value="<?php  echo get_option('th_sm_icon2'); ?>">
</div>
	<?php } ?>
	</div>
	

<div class="themehelper-social-media-container">	
	<div class="col2">
	<select name="themehelper_social_media3[sm_select3]"> 
	<option>  </option>
	<option  value="<?php echo $th_fb; ?>" <?php selected( $option3['sm_select3'], $th_fb ); ?>> Facebook  </option>
	<option value="<?php echo $th_twitter; ?>" <?php selected( $option3['sm_select3'], $th_twitter ); ?>> Twitter  </option>
	<option value="<?php echo $th_linkedin; ?>" <?php selected( $option3['sm_select3'], $th_linkedin ); ?>> Linkedin  </option>
	<option value="<?php echo $th_youtube; ?>" <?php selected( $option3['sm_select3'], $th_youtube ); ?>> Youtube </option>
	<option value="<?php echo $th_google; ?>" <?php selected( $option3['sm_select3'], $th_google ); ?>> Google  </option>
	<option value="<?php echo $th_instagram; ?>" <?php selected( $option3['sm_select3'], $th_instagram ); ?>> Instagram  </option>
	<option value="<?php echo $th_blogs; ?>" <?php selected( $option3['sm_select3'], $th_blogs ); ?>> Blogs  </option>
	<option value="<?php echo $th_rss; ?>" <?php selected( $option3['sm_select3'], $th_rss ); ?>> Rss  </option>
	<option value="<?php echo $th_flickr; ?>" <?php selected( $option3['sm_select3'], $th_flickr ); ?>> Flickr  </option>
	<option value="<?php echo $th_pinterest; ?>" <?php selected( $option3['sm_select3'], $th_pinterest ); ?>> Pinterest  </option>
	<option value="<?php echo $th_vimeo; ?>" <?php selected( $option3['sm_select3'], $th_vimeo ); ?>> Vimeo  </option>
	<option value="<?php echo $th_thumbler; ?>" <?php selected( $option3['sm_select3'], $th_thumbler ); ?>> Thumbler  </option>
	<option value="<?php echo $th_custom3; ?>" <?php selected( $option3['sm_select3'], $th_custom3 ); ?>> Custom Icon  </option>
	</select>
	</div>
	<div class="col22">
	<input type="text" name="themehelper_social_media_url3" class="regular-text" value="<?php echo get_option(themehelper_social_media_url3); ?>">	
	</div>
	<?php if (get_option(th_use_custom_icon) == "th_use_custom_icon") { ?>
<div class="col2">
<input type="button" name="upload-sm-icon3" id="upload-sm-icon3" class="button-secondary" value="Select Image">
	</div>
	<div class="col22">
	<input type="text" name="th_sm_icon3" id="th_sm_icon3" class="regular-text" value="<?php  echo get_option(th_sm_icon3); ?>">
</div>	
	<?php } ?>
	</div>	
		
	
<div class="themehelper-social-media-container">	
	<div class="col2">
	<select name="themehelper_social_media4[sm_select4]"> 
	<option>  </option>
	<option  value="<?php echo $th_fb; ?>" <?php selected( $option4['sm_select4'], $th_fb ); ?>> Facebook  </option>
	<option value="<?php echo $th_twitter; ?>" <?php selected( $option4['sm_select4'], $th_twitter ); ?>> Twitter  </option>
	<option value="<?php echo $th_linkedin; ?>" <?php selected( $option4['sm_select4'], $th_linkedin ); ?>> Linkedin  </option>
	<option value="<?php echo $th_youtube; ?>" <?php selected( $option4['sm_select4'], $th_youtube ); ?>> Youtube </option>
	<option value="<?php echo $th_google; ?>" <?php selected( $option4['sm_select4'], $th_google ); ?>> Google  </option>
	<option value="<?php echo $th_instagram; ?>" <?php selected( $option4['sm_select4'], $th_instagram ); ?>> Instagram  </option>
	<option value="<?php echo $th_blogs; ?>" <?php selected( $option4['sm_select4'], $th_blogs ); ?>> Blogs  </option>
	<option value="<?php echo $th_rss; ?>" <?php selected( $option4['sm_select4'], $th_rss ); ?>> Rss  </option>
	<option value="<?php echo $th_flickr; ?>" <?php selected( $option4['sm_select4'], $th_flickr ); ?>> Flickr  </option>
	<option value="<?php echo $th_pinterest; ?>" <?php selected( $option4['sm_select4'], $th_pinterest ); ?>> Pinterest  </option>
	<option value="<?php echo $th_vimeo; ?>" <?php selected( $option4['sm_select4'], $th_vimeo ); ?>> Vimeo  </option>
	<option value="<?php echo $th_thumbler; ?>" <?php selected( $option4['sm_select4'], $th_thumbler ); ?>> Thumbler  </option>
	<option value="<?php echo $th_custom4; ?>" <?php selected( $option4['sm_select4'], $th_custom4 ); ?>> Custom Icon  </option>
	</select>
	</div>
	<div class="col22">
	<input type="text" name="themehelper_social_media_url4" class="regular-text" value="<?php echo get_option(themehelper_social_media_url4); ?>">	
	</div>	
	<?php if (get_option(th_use_custom_icon) == "th_use_custom_icon") { ?>
<div class="col2">
<input type="button" name="upload-sm-icon4" id="upload-sm-icon4" class="button-secondary" value="Select Image">
	</div>
	<div class="col22">
	<input type="text" name="th_sm_icon4" id="th_sm_icon4" class="regular-text" value="<?php  echo get_option(th_sm_icon4); ?>">
</div>	
	<?php } ?>
	</div>


<div class="themehelper-social-media-container">	
	<div class="col2">
	<select name="themehelper_social_media5[sm_select5]"> 
	<option>  </option>
	<option  value="<?php echo $th_fb; ?>" <?php selected( $option5['sm_select5'], $th_fb ); ?>> Facebook  </option>
	<option value="<?php echo $th_twitter; ?>" <?php selected( $option5['sm_select5'], $th_twitter ); ?>> Twitter  </option>
	<option value="<?php echo $th_linkedin; ?>" <?php selected( $option5['sm_select5'], $th_linkedin ); ?>> Linkedin  </option>
	<option value="<?php echo $th_youtube; ?>" <?php selected( $option5['sm_select5'], $th_youtube ); ?>> Youtube </option>
	<option value="<?php echo $th_google; ?>" <?php selected( $option5['sm_select5'], $th_google ); ?>> Google  </option>
	<option value="<?php echo $th_instagram; ?>" <?php selected( $option5['sm_select5'], $th_instagram ); ?>> Instagram  </option>
	<option value="<?php echo $th_blogs; ?>" <?php selected( $option5['sm_select5'], $th_blogs ); ?>> Blogs  </option>
	<option value="<?php echo $th_rss; ?>" <?php selected( $option5['sm_select5'], $th_rss ); ?>> Rss  </option>
	<option value="<?php echo $th_flickr; ?>" <?php selected( $option5['sm_select5'], $th_flickr ); ?>> Flickr  </option>
	<option value="<?php echo $th_pinterest; ?>" <?php selected( $option5['sm_select5'], $th_pinterest ); ?>> Pinterest  </option>
	<option value="<?php echo $th_vimeo; ?>" <?php selected( $option5['sm_select5'], $th_vimeo ); ?>> Vimeo  </option>
	<option value="<?php echo $th_thumbler; ?>" <?php selected( $option5['sm_select5'], $th_thumbler ); ?>> Thumbler  </option>
	<option value="<?php echo $th_custom5; ?>" <?php selected( $option5['sm_select5'], $th_custom5 ); ?>> Custom Icon  </option>
	</select>
	</div>
	<div class="col22">
	<input type="text" name="themehelper_social_media_url5" class="regular-text" value="<?php echo get_option(themehelper_social_media_url5); ?>">	
	</div>	
<?php if (get_option(th_use_custom_icon) == "th_use_custom_icon") { ?>

	<div class="col2">
<input type="button" name="upload-sm-icon5" id="upload-sm-icon5" class="button-secondary" value="Select Image">
	</div>
	<div class="col22">
	<input type="text" name="th_sm_icon5" id="th_sm_icon5" class="regular-text" value="<?php  echo get_option(th_sm_icon5); ?>">
</div>
<?php } ?>
	</div>	
		
	    </div>

		   <div id="tab5" class="tab">
		   
		    <div class="themehelper-container">
		   <h2> Banner </h2> 
		   </div>
	
<div class="themehelper-container">
	
	<h3> Banner 1 </h3>
<p> Shortcode: [themehelper_banner1] </p>
  <input type="text" name="themehelper_banner1" id="themehelper_banner1" class="regular-text" value="<?php  echo get_option('themehelper_banner1'); ?>">
    <input type="button" name="upload-banner-btn1" id="upload-banner-btn1" class="button-secondary" value="Upload Image">
	<div class="themehelper-img">
	<?php
	if (!get_option('themehelper_banner1') == '') {
	?>
	<img id="themehelper_banner1" src="<?php  echo get_option('themehelper_banner1'); ?>">
	<?php 
	}
	?>
	</div>
	</div>
	
	
	<div class="themehelper-container">
	
	<h3> Banner 2 </h3>
<p> Shortcode: [themehelper_banner2] </p>
  <input type="text" name="themehelper_banner2" id="themehelper_banner2" class="regular-text" value="<?php  echo get_option('themehelper_banner2'); ?>">
    <input type="button" name="upload-banner-btn2" id="upload-banner-btn2" class="button-secondary" value="Upload Image">
	<div class="themehelper-img">
	<?php
	if (!get_option('themehelper_banner2') == '') {
	?>
	<img id="themehelper_banner2" src="<?php  echo get_option('themehelper_banner2'); ?>">
	<?php 
	}
	?>
	</div>
	</div>
	
		   
		   </div>
		
		</div>

</div>		
</div>

<div class="themehelper-header-save">  <?php submit_button(); ?> </div>

</div>


<script>
jQuery(document).ready(function() {
    jQuery('.th-tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.th-tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});
</script>	
	
	</form>
	
	<?php
}
?>