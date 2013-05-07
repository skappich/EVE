
function EVEtracking(position){
	if (navigator.geolocation && !position){
  	navigator.geolocation.getCurrentPosition(EVEtracking);
  }
  else{
  	$.post("/evepoc/", { latitude: position.coords.latitude, longitude: position.coords.longitude } );
  	window.setTimeout("navigator.geolocation.getCurrentPosition(EVEtracking)",15000);
  }
}  


function onSuccess(data, status)
{
	if(data == "ok"){
		$.mobile.changePage($("#uebersicht"));
	}
	else{
		$("#Fehlerdialog").popup();
    $("#Fehlerdialog").popup("open");
	}
}

function onError(data, status)
{
		$("#Fehlerdialog").popup();
    $("#Fehlerdialog").popup("open");
}        

function hideLogin(){
	if($.cookie('PHPSESSID')){
		$.mobile.changePage($("#uebersicht"));
	}
	else{
		$.mobile.changePage($("#anmeldung"));
	}
}


$(document).ready(function() {
	
		hideLogin();	
	
    $("#loginbutton").click(function(){

        var formData = $("#loginform").serialize();

        $.ajax({
            type: "POST",
            url: "ajax/",
            cache: false,
            data: formData,
            success: onSuccess,
            error: onError
        });

        return false;
    });
    
    $("#logout").click(function(){
   			$.removeCookie('PHPSESSID', { path: '/' });
   			$.mobile.changePage($("#anmeldung"));
   			return false;
   	});
		
		$("#einstellungen").on( "pageinit", function( event ) {
			$( "#montag_start_1" ).val("0")
													  .slider("refresh");
			
			console.log($( "#montag_start_1" ).val());
		});
		
		$("#einstellungen").on( "pagebeforeshow", function( event ) { 
				
				
				
				$( ".montag_2" ).slider( "option", "disabled", true );
				$( ".dienstag_2" ).slider( "option", "disabled", true );
				$( ".mittwoch_2" ).slider( "option", "disabled", true );
				$( ".donnerstag_2" ).slider( "option", "disabled", true );
				$( ".freitag_2" ).slider( "option", "disabled", true );
				$( ".samstag_2" ).slider( "option", "disabled", true );
				$( ".sonntag_2" ).slider( "option", "disabled", true );	
 		})   	
    
});

