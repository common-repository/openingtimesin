<?php
/**
 * The main plugin controller
 *
 * @package application
 * @subpackage Main Plugin Controller
 * @since 0.1
 */
 
 class openingtimesController
{
    
    public function __construct()
    {	
    
         require_once( 'opening-times-page-view.php' );
	     //instantiate the model
	     $otPageView = new openingTimesPageView();
    	
    	 add_action('wp_footer', array(&$otPageView, 'ot_showTag'));
    	 
   		 add_action( 'admin_menu', array( $this, 'ot_add_admin_menu' ) );
		
    	 
    }
    function ot_add_admin_menu() {
			//create custom top-level menu
			
			 require_once( 'opening-times-admin-view.php' );
			
			
			$otAdminView = new openingTimesAdminView();
			
			add_menu_page( 'OpeningTimes.in', 'OpeningTimes.in',
						   'manage_options', 'openingtimes.in',  array( &$otAdminView, 'ot_menu_settings_page' ),
							plugins_url( 'openingtimesin/images/openingtimes.png') );
							
		   //call register settings function
		   add_action( 'admin_init', array( $this, 'register_openingtimes_settings' ));
	}
	
	function register_openingtimes_settings() {
		
		//register our settings
		register_setting( 'openingtimes-settings-group', 'openingtimes_client_id' );
		register_setting( 'openingtimes-settings-group', 'openingtimes_api_Key' );
		register_setting( 'openingtimes-settings-group', 'openingtimes_bg_color' );
		register_setting( 'openingtimes-settings-group', 'openingtimes_bgHover_color' );
		
	}
		
	
}
 
	$foo = new openingtimesController;
?>