jQuery(document).ready(function($) {

	$('.button.cancel').click(function(e) {
		e.preventDefault();
		var cancelURL = jQuery(this).attr("href");

		if(1 == ajax_object.reason_required)
		{
			var subscription_id = $.urlParam('subscription_id', cancelURL);

			var confirmDelete = prompt(ajax_object.promt_msg, "");
			if (confirmDelete != null && confirmDelete != "") {
				var data = {
					'action': 'wcs_cancel_confirmation',
					'subscription_id': subscription_id,
					'reason_to_cancel': confirmDelete
				};
	
				jQuery.post(ajax_object.ajax_url, data, function(response) {
					if(response=='' || response==null || response<=0){
						alert(ajax_object.error_msg);
					}
				}).done(function() {
					window.location.href = cancelURL;
				});
			}
		}
		else
		{
			var confirmCancel = confirm(ajax_object.promt_msg);
			if(confirmCancel == true)
			{
				window.location.href = cancelURL;
			}	
		}
	});
})

jQuery.urlParam = function(name, url) {
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(url);
	return results[1] || 0;
}