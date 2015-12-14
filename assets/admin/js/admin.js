$(document).ready(function() {
    $('*[data-delete-confirm]').easyconfirm(
    		{
    			locale: { 
    				title: CONFIRM_TITLE_DIALOG, 
    				text: CONFIRM_DELETE_MSG,
    				button: [BTN_DIALOG_CANCEL, BTN_DIALOG_OK]
    			}
    		}
    	);
    

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
		$.ajax({
			url: url,
			data: { 'status': status, id: id },
			dataType: 'json',
			success: function(data) {
				$this.removeClass('processing');
				
				//var obj = $.parseJSON(data);
				if (data.STATUS) {
					$this.removeClass(removeClass).addClass(addClass);
					status = (status == 0) ? 1 : 0;
					$this.attr('val', status);
				}
			}
		});
	});
	
	//BUTTON SUBMIT
	/*$('.table-form .buttonSubmit').click(function(e) {
		$('.table-form').submit();
	});*/
	
	//BUTTON HREF
	$('*[data-href]').click(function(e) {
	    e.preventDefault();
	    var url = $(this).attr('data-href');
	    if(url)
	    	window.location.href = url;
	});
	
	//FILTER ONCHANGE
	$('*[data-filter]').on('change', function() {
		var $this = $(this);
		var value = $this.val();
		var name = $this.attr('name');
		var url = $this.attr('data-filter');
		var new_patt = name + "=" + value + "&";
		var patt = new RegExp(name + "=[A-z0-9-]*&");
		if( url && patt.test(url) ) {
			url = url.replace(patt, new_patt);
			window.location.href = url;
		}
	});
	
	//SEARCH
	$('*[data-search]').on('click', function (){
		var searchID = $(this).attr('data-search');
		var search = $(searchID);
		var value = search.val();
		var name = search.attr('name');
		var url = search.attr('href');
		var new_patt = name + "=" + value + "&";
		var patt = new RegExp(name + "=[A-z0-9-]*&");
		if( url && patt.test(url) ) {
			url = url.replace(patt, new_patt);
			window.location.href = url;
		}
	});
	
	//PAGINATION
	$('#dynamic_paginate a').on('click', function() {
		var $this = $(this);
		var url = $('#dynamic_paginate').attr('data-href');
		var value = $this.attr('tabindex');
		var new_patt = "page=" + value + "&";
		var patt = new RegExp("page=[A-z0-9-]*&");
		if( url && patt.test(url) ) {
			url = url.replace(patt, new_patt);
			window.location.href = url;
		}
	});
	
	
	//DELETE
	$('*[data-delete-selected]').on('click', function(e) {
		var input = $("<input>").attr("type", "hidden").attr("name", "type").val("delete");
		$('form').append($(input));
	    $('form').submit();
	});
	
	//ALIAS
	$(':text[data-for]').blur(function() {
		var $this = $(this);
		var $alias = $( $this.attr('data-for') );
		if ( !$alias.val() ) {
			$alias.attr('disabled', 'disabled');
			$.ajax({
				url: '/index.php/admin/ajax/alias',
				data: { 'title': $this.val() },
				success: function(data) {
					$alias.val(data).removeAttr('disabled');
				}
			});
		}
	});

	//CK EDITOR
	$('*[data-editor]').each(function() {
		var id = $(this).attr('data-editor');
		CKEDITOR.replace( id );
	});

	$('.gallery_list').each(function() {
		var id = $(this).attr('id');
		$('#'+id).sortable();
	});

	//GALLERY
	function openKCFinder(lang) {
		window.KCFinder = {
	        callBackMultiple: function(files) {
	            window.KCFinder = null;
	            for(var i = 0; i < files.length; i++) {
	            	var li = liHTML(files[i]);
	            	$('#gallery_' + lang + '_list').append(li);
	            	var elInput = $('#gallery_' + lang);
	            }
	        }
	    };
	   	window.open('/assets/admin/js/kcfinder/browse.php?type=files&dir=files/public',
	        'kcfinder_multiple', 'status=0, toolbar=0, location=0, menubar=0, ' +
	        'directories=0, resizable=1, scrollbars=0, width=800, height=600'
	    );
	} 

	function liHTML(fileName) {
		var HTML = '<li>';
		HTML += '<div class=\'image\'>' + '<img src=\'' + fileName + '\'></div>';
		HTML += '<div class=\'config\'>' + '<input placeholder=\'w\' class=\'width\'/><input placeholder=\'h\' class=\'height\'/></div>';
		HTML += '</li>';
		return HTML;
	}

	function store() {

	}

	$('.gallery_submit').click(function() {
		
	});
	
	$('.upload-gallery').click(function(e) {
		e.preventDefault();
		var lang = $(this).attr('rel');
		openKCFinder(lang);
	});
	
	//CLOSE FLASH
	setTimeout(function() {
		$('.flash').fadeOut();
	}, 3000);
});