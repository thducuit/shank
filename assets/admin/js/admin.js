$(document).ready(function() {
    
    // UDATE STATUS
	$('input[data-status]').click(function() {
		var $this = $(this);
		/*var status = $this.hasClass('publish') ? 0 : 1;*/
		var removeClass = $this.hasClass('publish') ? 'publish' : 'unpublish';
		var addClass = $this.hasClass('publish') ? 'unpublish' : 'publish';
		var url = $this.attr('data-status');
		var status = $this.attr('val');
		var id = $this.attr('data-row');
		$this.addClass('processing');
		$.ajaxq('update-status', {
			url: url,
			data: { 'status': status, id: id },
			dataType: 'json',
			success: function(data) {
				$this.removeClass('processing');
				if (data.message) {
					$this.removeClass(removeClass).addClass(addClass);
				}
			}
		});
	});
	
	//BUTTON SUBMIT
	$('.table-form .buttonSubmit').click(function(e) {
		$('.table-form').submit();
	});
	
	//BUTTON HREF
	$('button[data-href]').click(function(e) {
	    e.preventDefault();
	    var url = $(this).attr('data-href');
	    if(url)
	    	window.location.href = url;
	});
	
});