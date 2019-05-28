
$(document).ready(function(){
	
	$('input[type="text"], input[type="password"], textarea, input[type="date"]').each(function() {
		$(this).val( $(this).attr('placeholder') );
    });
	
});