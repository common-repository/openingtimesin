<?php


class openingTimesPageView
    {
        /**
         * print the message
         *
         * @package MVC Example
         * @subpackage Single Post View
         *
         * @return string $html the html for the view
         * @since 0.1
         */
        public static function ot_showTag()
        {
       		wp_register_style( 'openingTimes', plugins_url( 'openingtimesin/css/openingTimes.css')); 
			wp_enqueue_style( 'openingTimes' );
			
			$otLoadingImagePath = plugins_url( 'openingtimesin/images/ajax-loader.gif');
			$otLogoImagePath = plugins_url( 'openingtimesin/images/openingtimes.png');
			//echo($otLoadingImagePath);
			
			$otClientID = get_option('openingtimes_client_id');
			$otAPIKey = get_option('openingtimes_api_Key');
			
			$otTabBgColor = get_option('openingtimes_bg_color');;
			$otTabBgHoverColor = get_option('openingtimes_bgHover_color');
			
			if(empty($otTabBgColor)){
				
				$otTabBgColor = '#469DFF';
				
			}
			
			if(empty($otTabBgHoverColor)){
				
				$otTabBgHoverColor = '#006699';
				
			}
			
			
			
			
			if(!empty($otClientID) && !empty($otAPIKey)){
				
				wp_register_style( 'otWidget', plugins_url( 'openingtimesin/css/otWidget.css')); 
				wp_enqueue_style( 'otWidget' );
				
				wp_enqueue_script('jquery');
				
				wp_enqueue_script('openingtimes_js', plugins_url( 'openingtimesin/js/openingtimes.js') );
			?>
        		<style type="text/css">
        			
        			#openingtimes-tab:hover {
	
						background-color: <?php echo $otTabBgHoverColor; ?>;
						border: outset 1px <?php echo $otTabBgHoverColor; ?>;
						border-right: none;
						cursor: pointer;
					}

					#openingtimes-tab {
						
						position: fixed;
						right: 0;
						top: 50%;
						display: block;
						background: <?php echo $otTabBgColor; ?> -2px 50% no-repeat;
						width: 25px;
						height: 100px;
						margin-top: -45px;
						border: outset 1px <?php echo $otTabBgColor; ?>;
						border-right: none;
						z-index: 100001;
						
					}
					
        		</style>
        	
        		<input type="hidden" id="otOpeningtimesClientId" value="<?php echo($otClientID); ?>"/>
				<input type="hidden" id="otOpeningtimesApiKey" value="<?php echo($otAPIKey); ?>"/>
				<input type="hidden" id="otLoadingImagePath" value="<?php echo($otLoadingImagePath); ?>"/>
				<input type="hidden" id="otLogoImagePath" value="<?php echo($otLogoImagePath); ?>"/>
				
        		<div id='openingtimes-tab'><a href="#">Timings</a></div>
        		
        		 <!-- end: #left_column_date_search -->
        	<?php
        	
			}else{
				echo('inside empty');
			}
			
        }
        
    }
    
?>