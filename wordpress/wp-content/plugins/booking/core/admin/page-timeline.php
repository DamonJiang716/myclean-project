<?php /**
 * @version 1.0
 * @package Booking Calendar 
 * @category Content of Booking Listing page
 * @author wpdevelop
 *
 * @web-site https://wpbookingcalendar.com/
 * @email info@wpbookingcalendar.com 
 * 
 * @modified 2015-11-13
 */

if ( ! defined( 'ABSPATH' ) ) exit;                                             // Exit if accessed directly



/**
	 * Show Content
 *  Update Content
 *  Define Slug
 *  Define where to show
 */
class WPBC_Page_CalendarOverview extends WPBC_Page_Structure {
        
    private $timeline;
    
    public function __construct() {
        
        parent::__construct();

        // Redefine TAGs Names,  becasue 'tab' slug already used in the system  for definition  of active toolbar.
        $this->tags['tab']    = 'view_mode';
        $this->tags['subtab'] = 'bottom_nav';
    }
    
    
    public function in_page() {
        return 'wpbc';
    }

    public function tabs() {
        
        $tabs = array();
        $tabs[ 'vm_calendar' ] = array(
                              'title' => __('Timeline View','booking')            // Title of TAB
                            , 'hint' => __('Timeline View', 'booking')                      // Hint
                            , 'page_title' => __('Timeline View', 'booking')                                // Title of Page
                            , 'link' => ''                                      // Can be skiped,  then generated link based on Page and Tab tags. Or can  be extenral link
                            , 'position' => ''                                  // 'left'  ||  'right'  ||  ''
                            , 'css_classes' => ''                               // CSS class(es)
                            , 'icon' => ''                                      // Icon - link to the real PNG img
                            , 'font_icon' => 'wpbc_icn_rotate_90 wpbc_icn_align_vertical_bottom'             			// CSS definition  of forn Icon		// FixIn: 9.5.5.3.
                            , 'header_font_icon' => 'wpbc_icn_rotate_90 wpbc_icn_align_vertical_bottom'             	// CSS definition  of forn Icon		// FixIn: 9.5.5.3.
                            , 'default' => false                                 // Is this tab activated by default or not: true || false.
                            , 'disabled' => false                               // Is this tab disbaled: true || false. 
                            , 'hided'   => true                                 // Is this tab hided: true || false.
                            , 'subtabs' => array()
            
        );
        
        // $subtabs = array();                
        // $tabs[ 'bookings' ][ 'subtabs' ] = $subtabs;
        
        return $tabs;        
    }


    public function content() {                
        
        wpbc_check_request_paramters();                                         //Cleanup REQUEST parameters        // FixIn: 6.2.1.4.
        
        do_action( 'wpbc_hook_booking_page_header', 'timeline' );               // Define Notices Section and show some static messages, if needed.
                                        
        if ( ! wpbc_is_mu_user_can_be_here( 'activated_user' ) ) return false;  // Check if MU user activated,  otherwise show Warning message.

        if ( ! wpbc_set_default_resource_to__get() ) return false;              // Define default booking resources for $_ GET  and  check if booking resource belong to user.
        
        ?><span class="wpdevelop"><?php                                         // BS UI CSS Class
        
        wpbc_js_for_bookings_page();                                            // JavaScript functions
        
        wpbc_welcome_panel();                                                   // Welcome Panel (links)

        make_bk_action( 'wpbc_check_request_param__wh_booking_type' );          // Setting $_REQUEST['wh_booking_type'] - remove empty and duplicates ID of booking resources in this list        
        
        make_bk_action( 'check_for_resources_of_notsuperadmin_in_booking_listing' );    // If "Regular User",  then filter resources in $_REQUEST['wh_booking_type'] to show only resources of this user
        
        wpbc_set_request_params_for_timeline();                                 // Set initial $_REQUEST['view_days_num'] depend from selected booking resources
        
        //   T o o l b a r s   /////////////////////////////////////////////////
        wpbc_timeline_toolbar();                                                
     
        ?><div class="clear" style="height:25px;"></div><?php

            // Show    T i m e L i n e   ///////////////////////////////////////

			// FixIn: 9.9.0.18.
			$server_zone = date_default_timezone_get();                                                                         // If in 'Theme' or 'other plugin' set  default timezone other than UTC. Save it.
			if ( 'UTC' !== $server_zone ) {                                                                                     // Needed for WP date functions  - set timezone to  UTC
				// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set
				@date_default_timezone_set( 'UTC' );
			}

			// FixIn: 8.6.1.13.
			$this->timeline = new WPBC_TimelineFlex();

			$this->timeline->admin_init();                                      // Define all REQUEST parameters and get bookings

			$this->timeline->show_timeline();

			// FixIn: 9.9.0.18.
			if ( 'UTC' !== $server_zone ) {                                                                                     // Back  to  previos state,  if it was changed.
				// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set
				@date_default_timezone_set( $server_zone );
			}

            ////////////////////////////////////////////////////////////////////
            
            wpbc_show_booking_footer();           
        
        ?></span><!-- wpdevelop class --><?php 
    }

}
add_action('wpbc_menu_created', array( new WPBC_Page_CalendarOverview() , '__construct') );    // Executed after creation of Menu
