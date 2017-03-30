$(document).ready(function(){
	$("textarea").hide();

	$('input[name = titulo').change(function(){
		var checkName = '[name="'+ $(this).val() +'"]';		
		if ($(this).prop('checked')) {
			$(checkName).prop('checked', true);
		}else{
			$(checkName).prop('checked', false);
		}
	});
	$()
});