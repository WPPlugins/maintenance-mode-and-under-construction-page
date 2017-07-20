<?php
//Default Options
function weblizar_rmmuc_default_settings() {
	$default_bg= plugin_dir_url( __FILE__ ).'images/cg_img1.jpg';
	$logo_img= plugin_dir_url( __FILE__ ).'images/logo.png';	
	$site_title = get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description' );
	global $current_user;
	wp_get_current_user();
	$LoggedInUserEmail1 = $current_user->user_email;
	$LoggedInUsername1 = $current_user->user_login;
	$wl_rmmuc_options=array(
	
		//Ganeral Settings Options
		'select_template' => 'select_template1',
		'page_meta_title' =>$site_title.' - '.$site_description,
		'page_meta_keywords' =>'' ,
		'page_meta_discription' =>'Our website is under construction. It will be live soon.',
		'search_robots' =>'on',
		'rmmuc_robots_meta'=>'index follow',
		'upload_image_favicon' =>$logo_img,
		
		//Appearance Settings Options	
		'layout_status' =>'deactivate',
		//Under Construction Mode
		'under-construction_title' =>__('Our site is under construction mode','weblizar'),
		'under-construction_sub_title' =>__('Stay tuned for something amazing','weblizar'),	
		'under-construction_message' =>__('New Look, new featured and a faster interface!','weblizar'),	
		//Redirect Settings
		'select_pageandpost'=> '',
		//Maintainance Mode
		'maintenance_title' =>__('Maintainance mode on','weblizar'),
		'maintenance_sub_title' =>__("We're Currently upgrading our site! Please check back","weblizar"),
		'maintenance_message' =>__('New Look, new featured and a faster interface!','weblizar'),			
		'site_logo' =>'logo_image',
		'logo_text_value' =>$site_title,
		'upload_image_logo' =>$logo_img,		
		'logo_height' =>'150',
		'logo_width' =>'250',
		'bg_color' =>'#0098ff',
		'template_bg_select' => 'Custom_Background',
		'custom_bg_img' =>$default_bg,
		'button_onoff' => 'on',
		'button_text'=> 'DISCOVER MORE',
		'button_text_link'=> '#timer',
		'link_admin' => 'on',
		'admin_link_text'=> 'Admin Dashboard',
		
		//Access Control Settings
		'user_value' => array(),
		'page_layout_swap' => array('Subscriber Form','Social'),		

		//Skin Layout Settings
		'theme_color_schemes' => '#eb5054',
		
		//Social Settings
		'social_icon_1' =>'fa fa-facebook',
		'social_icon_2' =>'fa fa-twitter',
		'social_icon_3' =>'fa fa-google-plus',
		'social_icon_4' =>'fa fa-linkedin',
		'social_icon_5' =>'fa fa-pinterest',		
		'social_link_1' =>'#',
		'social_link_2' =>'#',
		'social_link_3' =>'#',
		'social_link_4' =>'#',
		'social_link_5' =>'#',
		'link_tab_1' =>'off',		
		'link_tab_2' =>'off',		
		'link_tab_3' =>'off',		
		'link_tab_4' =>'off',		
		'link_tab_5' =>'off',
		'total_Social_links'=>'5',
		'social_icon_list'=>'',
	
		//Subscriber Form Settings
		'subscriber_form' =>'on',	
		'subscriber_form_title' =>__('SUBSCRIBE TO OUR NEWSLETTER','rmmuc_TEXT_DOMAIN'),
		'subscriber_form_icon' =>'fa fa-envelope-o',
		'subscriber_form_sub_title' => __('In the mean time connect with us to subscribed our newsletter','rmmuc_TEXT_DOMAIN'),
		'subscriber_form_message' => __("Subscribe and we'll notify you on our launch. We'll also throw in a freebie for your effort.",'rmmuc_TEXT_DOMAIN'),
		'sub_form_button_text' =>'Subscribe',		
		'sub_form_button_f_name' =>'First Name',
		'sub_form_button_l_name' =>'Last Name',
		'sub_form_subscribe_title' =>'Email',		'user_sets' => '$user_sets_all',
		'sub_form_subscribe_seuccess_message' => __( 'Thank you! We will be back with the quote.', 'rmmuc_TEXT_DOMAIN' ),
		'sub_form_subscribe_invalid_message' => __('You have already subscribed.', 'rmmuc_TEXT_DOMAIN' ),		'subscriber_msg_body' =>'',		'sub_form_subscribe_confirm_success_message' =>__('Thank You!!! Subscription has been confirmed. We will notify when the site is live.', 'rmmuc_TEXT_DOMAIN' ),		'sub_form_subscribe_already_confirm_message' =>__('You subscription is already active. We will notify when the site is live.', 'rmmuc_TEXT_DOMAIN' ),		'sub_form_invalid_confirmation_message' =>__('Error: Invalid subscription details.', 'rmmuc_TEXT_DOMAIN' ),
		
		//Subscriber Form Option Settings
		'subscribe_select' =>'wp_mail',
		'wp_mail_email_id' =>$LoggedInUserEmail1,
		'confirm_email_subscribe' => 'off',
		
		//Subscriber List Options Setting
		'auto_sentto_activeusers' =>'on',
		'subscriber_users_mail_option' =>'all_users',
		'subscriber_mail_subject' =>'',
		'subscriber_mail_message' =>'',	

		// Counter Clock and Progress Bar Options
		'counter_title' => "We're Coming Soon",
		'counter_title_icon' =>'fa fa-clock-o',
		'counter_msg' =>'We Are Currently Working On Something Awesome',
		'disable_the_plugin' =>'off',
		'maintenance_date' => date("Y/m/d h:i", strtotime("+7 day")),
		
		// Footer Options
		'footer_copyright_text' =>'Copyright © 2016 Weblizar Themes & Plugins | All Rights Reserved By',
		'footer_link' =>'https://weblizar.com',
		'footer_link_text' =>'Weblizar',
		
		
		//Extra Advance options/option
		'custom_css' =>'',		
		'google_analytics' =>'',
		
		//feedback Settings
		'feedback_mail' =>'',
		'feedback_heading' =>'Book Appointment',
		'feedback_icon' =>'fa fa-calendar',
		'feedback_btn' =>'Booking Appointment',	
	);
	return apply_filters( 'weblizar_rmmuc_options', $wl_rmmuc_options );
}

// Options API
function weblizar_rmmuc_get_options() {
    // Options API Settings
    return wp_parse_args( get_option( 'weblizar_rmmuc_options', array() ), weblizar_rmmuc_default_settings() );    
}

//General Options Setting
function rmmuc_general_setting() {
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');
	$site_title = get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description' );
	$wl_rmmuc_options['page_meta_title']= $site_title.' - '.$site_description;
	$wl_rmmuc_options['page_meta_keywords']= '';
	$wl_rmmuc_options['page_meta_discription']= 'Our website is under construction. It will be live soon.';
	$wl_rmmuc_options['search_robots']= 'on';
	$wl_rmmuc_options['rmmuc_robots_meta']= 'index follow';
	$wl_rmmuc_options['upload_image_favicon']= '';	
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}

//Appearance Options Setting
function rmmuc_appearance_setting() {
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');
	$site_title = get_bloginfo( 'name' );
	$default_bg= plugin_dir_url( __FILE__ ).'images/cg_img1.jpg';
	$logo_img= plugin_dir_url( __FILE__ ).'images/logo.png';
	$wl_rmmuc_options['layout_status']= 'deactivate';
	$wl_rmmuc_options['under-construction_title']= __('This website is under construction','weblizar');
	$wl_rmmuc_options['under-construction_sub_title']= __('Stay tuned for something amazing','weblizar');
	$wl_rmmuc_options['under-construction_message']=__('New Look, new featured and a faster interface!','weblizar');	
	$wl_rmmuc_options['select_pageandpost']= array();		
	$wl_rmmuc_options['maintenance_title']=__('Maintenance mode is on','weblizar');
	$wl_rmmuc_options['maintenance_sub_title']=__("We're Currently upgrading our site! Please check back","weblizar");
	$wl_rmmuc_options['maintenance_message']= __('New Look, new featured and a faster interface!','weblizar');
	$wl_rmmuc_options['site_logo']= 'logo_image';
	$wl_rmmuc_options['logo_text_value']= $site_title;
	$wl_rmmuc_options['upload_image_logo']=$logo_img;
	$wl_rmmuc_options['logo_height']= '150';
	$wl_rmmuc_options['logo_width']= '250';
	$wl_rmmuc_options['bg_color']= '#0098ff';
	$wl_rmmuc_options['template_bg_select']= 'Custom_Background';		
	$wl_rmmuc_options['custom_bg_img']= $default_bg;
	$wl_rmmuc_options['button_onoff']= 'on';
	$wl_rmmuc_options['button_text']= 'DISCOVER MORE';
	$wl_rmmuc_options['button_text_link']= '#timer';
	$wl_rmmuc_options['link_admin']= 'on';
	$wl_rmmuc_options['admin_link_text']= 'Admin Dashboard';
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}

//Access control Options Setting
function rmmuc_access_control_setting() {
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');
	$wl_rmmuc_options['show_page_as']= 'as_role';
	$wl_rmmuc_options['user_value']= array();
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}

//Layout swap control Options Setting
function rmmuc_page_layout_swap_setting() {
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');		
	$wl_rmmuc_options['page_layout_swap'] = array('Subscriber Form','Social');
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}

//Skin Layout Settings
function rmmuc_skin_layout_setting() {
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');
	$wl_rmmuc_options['theme_color_schemes']= '#eb5054';
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}

//Social Options Setting
function rmmuc_social_setting() {
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');
	$wl_rmmuc_options['social_icon_1']= 'fa fa-facebook';
	$wl_rmmuc_options['social_icon_2']= 'fa fa-twitter';	
	$wl_rmmuc_options['social_icon_3']= 'fa fa-google-plus';
	$wl_rmmuc_options['social_icon_4']= 'fa fa-linkedin';
	$wl_rmmuc_options['social_icon_5']= 'fa fa-pinterest';	
	for($i=1; $i<=5; $i++){
	$wl_rmmuc_options['social_link_'.$i]= '#';
	$wl_rmmuc_options['link_tab_'.$i]= 'off';
	}	
	$wl_rmmuc_options['total_Social_links']='5';	
	$wl_rmmuc_options['social_icon_list']='';
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}

//Subscriber Form Options Setting
function rmmuc_subscriber_form_setting() {
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');
	$wl_rmmuc_options['subscriber_form']= 'on';
	$wl_rmmuc_options['subscriber_form_title']=__('SUBSCRIBE TO OUR NEWSLETTER','rmmuc_TEXT_DOMAIN');
	$wl_rmmuc_options['subscriber_form_icon']= 'fa fa-envelope-o';
	$wl_rmmuc_options['subscriber_form_sub_title']= __('In the mean time connect with us to subscribed our newsletter','rmmuc_TEXT_DOMAIN');
	$wl_rmmuc_options['subscriber_form_message']= __("Subscribe and we'll notify you on our launch. We'll also throw in a freebie for your effort.",'rmmuc_TEXT_DOMAIN'); 
	$wl_rmmuc_options['sub_form_button_f_name']= 'First Name';
	$wl_rmmuc_options['sub_form_button_l_name']= 'Last Name';
	$wl_rmmuc_options['sub_form_button_text']= 'Subscribe';
	$wl_rmmuc_options['sub_form_subscribe_title']= 'Email';
	$wl_rmmuc_options['sub_form_subscribe_seuccess_message']=  __( 'Thank you! We will be back with the quote.', 'rmmuc_TEXT_DOMAIN' );
	$wl_rmmuc_options['sub_form_subscribe_invalid_message']= __('You have already subscribed.', 'rmmuc_TEXT_DOMAIN' );		
	$wl_rmmuc_options['subscriber_msg_body']= '';
	$wl_rmmuc_options['sub_form_subscribe_confirm_success_message']= __('Thank You!!! Subscription has been confirmed. We will notify when the site is live.', 'rmmuc_TEXT_DOMAIN' );		$wl_rmmuc_options['sub_form_subscribe_already_confirm_message']=  __('You subscription is already active. We will notify when the site is live.', 'rmmuc_TEXT_DOMAIN' );
	$wl_rmmuc_options['sub_form_invalid_confirmation_message']= __('Error: Invalid subscription details.', 'rmmuc_TEXT_DOMAIN' );
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}
		
//Subscriber Form Provider Options Setting
function rmmuc_subscriber_provider_setting() {
	global $current_user;
	wp_get_current_user();
	$LoggedInUserEmail1 = $current_user->user_email;
	$LoggedInUsername1 = $current_user->user_login;
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');		
	$wl_rmmuc_options['subscribe_select']= 'wp_mail';
	$wl_rmmuc_options['wp_mail_email_id']= $LoggedInUserEmail1;		
	$wl_rmmuc_options['confirm_email_subscribe']= 'off';
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}

//Subscriber List Options Setting
function rmmuc_subscriber_list_setting() {
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');	
	$wl_rmmuc_options['auto_sentto_activeusers']= 'off';
	$wl_rmmuc_options['subscriber_users_mail_option']= 'all_users';
	$wl_rmmuc_options['subscriber_mail_subject']= '';
	$wl_rmmuc_options['subscriber_mail_message']= '';
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}

// Counter Clock and Progress Bar Options Setting
function rmmuc_counter_clock_setting() {
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');
	$wl_rmmuc_options['counter_title_icon']= 'fa fa-clock-o';
	$wl_rmmuc_options['counter_title']= "We're Coming Soon";
	$wl_rmmuc_options['counter_msg']= 'We Are Currently Working On Something Awesome';
	$wl_rmmuc_options['disable_the_plugin']= 'off';
	$wl_rmmuc_options['maintenance_date']= date("Y/m/d h:i", strtotime("+7 day"));
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}	

//footer  Options Setting	
function rmmuc_footer_setting() {
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');
	$wl_rmmuc_options['footer_copyright_text']= __('Copyright © 2016 Weblizar Themes & Plugins | All Rights Reserved By','rmmuc_TEXT_DOMAIN');
	$wl_rmmuc_options['footer_link']= 'https://weblizar.com';
	$wl_rmmuc_options['footer_link_text']= 'Weblizar';
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}

//Advance Options Setting
function rmmuc_advance_option_setting() {
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');
	$wl_rmmuc_options['custom_css']= '';		
	$wl_rmmuc_options['google_analytics']= '';
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}

//Feedback options Setting 		
function rmmuc_feedback_setting() {
	$wl_rmmuc_options = get_option('weblizar_rmmuc_options');
	$wl_rmmuc_options['feedback_mail']= '';
	$wl_rmmuc_options['feedback_heading']= 'Book Appointment';
	$wl_rmmuc_options['feedback_icon']= 'fa fa-calendar';
	$wl_rmmuc_options['feedback_btn']= 'Booking Appointment';
	update_option('weblizar_rmmuc_options', $wl_rmmuc_options);
}