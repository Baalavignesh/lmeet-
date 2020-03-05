/*jslint browser: true*/
/*global $, jQuery, alert*/


         $(document).ready(function(){
         
         	$(".subint").on("click", function( ){
         		console.log("hello");
         		//  $( "div.subint" ).toggleClass( "subintmargin" );  
         		$(this).toggleClass( "subintmargin" );
         		$(this.overlay).toggleClass( "checked" );
         		});
         	});
         
         	function musicselect( )
         	{	
         		console.log("button clicked");
         		console.log(document.querySelectorAll("div.checked").alt);
         	}
         
         	$(function() {  
         	$( '#multiselect').multiselect();
         	});         