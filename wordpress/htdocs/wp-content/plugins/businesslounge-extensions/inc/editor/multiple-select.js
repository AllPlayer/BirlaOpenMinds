/**
 * RT-Theme VC Addon
 * Creates multiple select forms
 */
!function($) {
	$('#vc_properties-panel .vc_panel-btn-save').click(function(e){

		var values = [];
		
		$("#vc_properties-panel .rt-multi-select").each( function(){

			values = [];

			$(this).find("option:selected").each(function(){
				values.push($(this).val());  
			});

			$(this).removeAttr("multiple"); 

			$("option:selected",this).val( values.join() );

		});

	});

	$("#vc_properties-panel .rt-multi-select").on("change",function(e){

		if($(this).find("option:selected").val() == "" ){

			$(this).find("option:selected").each(function(){
				if( $(this).val() !== "" ) {
					$(this).attr("selected",null);
				}
			});
		}   

	});    
}(window.jQuery);