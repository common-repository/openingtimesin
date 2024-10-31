<?php

class openingTimesAdminView
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
         
        public static function ot_menu_settings_page()
        {
        	$otTabBgColor = get_option('openingtimes_bg_color');;
			$otTabBgHoverColor = get_option('openingtimes_bgHover_color');
			
			if(empty($otTabBgColor)){
				
				$otTabBgColor = '#469DFF';
				
			}
			
			if(empty($otTabBgHoverColor)){
				
				$otTabBgHoverColor = '#006699';
				
			}
			
        	?>
        	
        	<style type="text/css">
        		
        		#otBgColorPicker {
					margin:0;
					padding:0;
					border:0;
					width:100px;
					height:30px;
					border-right:20px solid <?php echo $otTabBgColor; ?>;
					line-height:20px;
				}
				
				#otBgHoverColorPicker {
					margin:0;
					padding:0;
					border:0;
					width:100px;
					height:30px;
					border-right:20px solid <?php echo $otTabBgHoverColor; ?>;
					line-height:20px;
				}
				
				.otInfoBox {
					background-color: #ffffff;
					-moz-box-shadow: 0 2px 5px rgba(0,0,0,.3);
					-webkit-box-shadow: 0 2px 5px rgba(0,0,0,.3);
					box-shadow: 0 1px 4px rgba(0,0,0,.3);
					margin-left: 0px;
					margin-right: 0px;
					padding-left: 20px;
					padding-right: 20px;
					padding-bottom: 10px;
					padding-top: 10px;
					margin-bottom: 20px;
				}
				
				.otrefButton{
					
					display: inline-block;
					text-decoration: none;
					font-size: 13px;
					line-height: 26px;
					height: 28px;
					margin: 0;
					padding: 0 10px 1px;
					cursor: pointer;
					border-width: 1px;
					border-style: solid;
					-webkit-border-radius: 3px;
					-webkit-appearance: none;
					border-radius: 3px;
					white-space: nowrap;
					-webkit-box-sizing: border-box;
					-moz-box-sizing: border-box;
					box-sizing: border-box;
					
					background: #2ea2cc;
					border-color: #0074a2;
					-webkit-box-shadow: inset 0 1px 0 rgba(120,200,230,.5),0 1px 0 rgba(0,0,0,.15);
					box-shadow: inset 0 1px 0 rgba(120,200,230,.5),0 1px 0 rgba(0,0,0,.15);
					color: #fff;
					text-decoration: none;
				}
				
				 .otrefButton.hover, .otrefButton:hover, .otrefButton.focus, .otrefButton:focus  {
				 	
				 	background: #1e8cbe;
					border-color: #0074a2;
					-webkit-box-shadow: inset 0 1px 0 rgba(120,200,230,.6);
					box-shadow: inset 0 1px 0 rgba(120,200,230,.6);
					color: #fff;
				 }
				
        	</style>
        	
			<div class="wrap">
				<h2>OpeningTimes.in</h2>
				<div class="otInfoBox">
					
					Openingtimes.in provides an easy and simple way to access your Business opening times information. Let's make your Customers and Visitors life better with quick access to the quality information.
					
				</div>
				
				<div class="otInfoBox">
					Please visit <a href="http://www.openingtimes.in/BizAccess" target="_blank;">www.openingtime.in</a> Dashboard to get the Client ID and API Key.
					<form method="post" action="options.php">
				    <?php settings_fields( 'openingtimes-settings-group' ); ?>
				    <?php do_settings_sections( 'openingtimes-settings-group' ); ?>
				    <table class="form-table">
				        <tr valign="top">
				        <th scope="row">Client ID</th>
				        <td><input type="text" name="openingtimes_client_id" value="<?php echo get_option('openingtimes_client_id'); ?>" /></td>
				        </tr>
				         
				        <tr valign="top">
				        <th scope="row">API Key</th>
				        <td><input type="text" name="openingtimes_api_Key" value="<?php echo get_option('openingtimes_api_Key'); ?>" /></td>
				        </tr>
				        
				        <tr valign="top">
				        <th scope="row">Background Color</th>
				        <td><input type="text" id="otBgColorPicker" name="openingtimes_bg_color" value="<?php echo $otTabBgColor; ?>" /></td>
				        </tr>
				        
				        <tr valign="top">
				        <th scope="row">Background Hover color</th>
				        <td><input type="text" id="otBgHoverColorPicker" name="openingtimes_bgHover_color" value="<?php echo $otTabBgHoverColor; ?>" /></td>
				        </tr>
				        
				    </table>
				    <div>
					For the color codes, please refer to : <a href="http://www.w3schools.com/tags/ref_colorpicker.asp" target="_blank">www.w3schools.com/tags/ref_colorpicker.asp</a>
				</div>
				
				    <?php submit_button(); ?>

				</form>
				
				
					
				</div>
				
				<div class="otInfoBox">
				
					Don't have an Account with OpeningTimes.in? <a href="http://www.openingtimes.in/BizAccess" target="_blank;"><button class="otrefButton" >openingtimes.in</button></a>
					
				</div>
				
			</div>
			
        	<?php
        }
    }
    
?>