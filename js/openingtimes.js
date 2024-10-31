jQuery(document).ready(function($) { 
  
            /******* Load CSS *******/
           
           var otLoadingImagepath = $("#otLoadingImagePath").val();
           var otLogoImagePath = $("#otLogoImagePath").val();
            var otDialog = '<div id="dialog-openingtime"> <div align="right"><button class="closeOtButton" id="otIdCloseButton">X</button></div>'+
            				'<div id="ot-loading"><img id="ot-loading-image" src="'+otLoadingImagepath+'" alt="Loading..." /></div>'+
            			   '<div id="OtIframe" style="height : 88%; width:100%; margin-bottom: 0;"></div><div class="otFooter" align="right"><img src="'+otLogoImagePath+'"/> &nbsp;<a href="http://www.openingtimes.in" target="_new" style="color: #555555;">Openingtimes.in </a></div></div>';
           
            $(otDialog).appendTo('body');
            
            
            $( "#openingtimes-tab" ).click(function() {
            	
            	var ot_client_id = $('#otOpeningtimesClientId').val();
            	var ot_api_key = $('#otOpeningtimesApiKey').val();
            	//alert("client id: "+ot_client_id+" api key : "+ot_api_key);
            	
            	var otDivOverlay = "<div id='OToverlay'></div>";
            	$(otDivOverlay).appendTo('body');
            	
            	$('#OtIframe').html("<iframe width='100%;' height='96%;' id='openingTimesFrame' frameborder='0' src='http://www.openingtimes.in/BizSearch/api/wordpress?clientId="+ot_client_id+"&&apiKey="+ot_api_key+"' onLoad='otLoadHide();'></iframe>");
            	
            	openDialogOpeningtime();
            	
            }); 
            
           
            $("#otIdCloseButton").click(function() {

            	$('#OtIframe').html('');
            	$( "div" ).remove( "#OToverlay" );
            	closeDialogOpeningtime();
            	
            });
            
});

function openDialogOpeningtime(){
    	
	otelDilog = document.getElementById("dialog-openingtime");
	otelDilog.style.visibility = (otelDilog.style.visibility == "visible") ? "hidden" : "visible";
}
    
function closeDialogOpeningtime(){
    	
	otelDilog = document.getElementById("dialog-openingtime");
	otelDilog.style.visibility = (otelDilog.style.visibility == "visible") ? "hidden" : "visible";
	
	otelLoading = document.getElementById("ot-loading");
	otelLoading.style.visibility = (otelLoading.style.visibility == "visible") ? "hidden" : "visible";
	
}

function otLoadHide(){
	
	document.getElementById('ot-loading').style.display='none';
}

