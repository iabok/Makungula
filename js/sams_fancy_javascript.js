// JavaScript Document
function fancy_hide_show(show,hide,element){

    jQuery(document).ready(function() {
     // hides the slickbox as soon as the DOM is ready
      jQuery('.'+element).hide();
     // shows the slickbox on clicking the noted link  
      jQuery('#'+show).click(function() {
        jQuery('.'+element).show('slow');
        return false;
      });
     // hides the slickbox on clicking the noted link  
      jQuery('#'+hide).click(function() {
        jQuery('.'+element).hide('fast');
        return false;
      });
     
     // toggles the slickbox on clicking the noted link  
      jQuery('#slick-toggle').click(function() {
        jQuery('.slickbox').toggle(400);
        return false;
      });
    });

}

function add_text_field(container_id,field_id,evt_btn_id){
jQuery("#"+evt_btn_id).click(function(){
   var ctrl = jQuery('<input/>').attr({ type: 'text', name:''+field_id, value:'',id:''+field_id,});
   jQuery("#"+container_id).append(ctrl);
});
}

//SUBMIT FORM WITHOUT PAGE REFRESH
function submit_form(form_id,out_id,url_string){
jQuery(document).ready(function() {
        jQuery('#'+form_id).submit(function() {
                jQuery.ajax({
                        type:'POST',
                        url: ''+url_string,
                        data: jQuery('#'+form_id).serialize(),
                      success: function(output) {
                          jQuery('#'+out_id).html(output);
						  jQuery('#'+form_id)[0].reset();
					      
							  
							    },
                        error: function(jqXHR, textStatus, errorThrown) {
                                jQuery('#'+out_id).html('<div class="error">Error!</div>');
                        }
                });
    
                return false;
        });
});
}

function sams_comfirm_box(){
	jQuery('<div id="dialog-confirm" > yellow</div>').appendTo('body')
 jQuery(function() {
		jQuery( "#dialog-confirm" ).dialog({
			resizable: false,
			height:140,
			modal: true,
			buttons: {
				"Delete all items": function() {
					jQuery( this ).dialog( "close" );
				},
				Cancel: function() {
					jQuery( this ).dialog( "close" );
				}
			}
		});
	});
 }