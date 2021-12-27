/**
 * RT-Theme VC Addon
 * Validates number fields
 */
!function($) {

	$("#vc_properties-panel .rt-number").on("keydown",function(){
			if( isNaN($(this).val()) || isNaN($(this).val())  ) {
				$(this).css({"border":"1px solid red"});
				$(this).val( $(this).val().replace(/\D/g,'') );
				return false;
			}else{
				$(this).removeAttr("style");
			}
	});    


	$("#vc_properties-panel .rt-number").on("keyup",function(){
			if( isNaN($(this).val()) || isNaN($(this).val())  ) {
				$(this).val( $(this).val().replace(/\D/g,'') );
				return false;
			}else{
				$(this).removeAttr("style");
			}
	});    

}(window.jQuery);