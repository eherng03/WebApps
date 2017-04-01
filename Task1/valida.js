$(document).ready(function(){
	$("textarea").hide();

	$('input[name = titulo').change(function(){
		var checkName = '[name="'+ $(this).val() +'"]';		
		if ($(this).prop('checked')) {
			$(checkName).prop('checked', true);
			$(checkName).trigger('change');					/*Force the checkbox to change*/
		}else{
			$(checkName).prop('checked', false);
			$(checkName).trigger('change');					/*Force the checkbox to change*/
		}
	});


	$('label').click(function() {
		var sibling = $(this).prev();
		if($(sibling).prop('checked')){
			$(sibling).prop('checked', false);
			$(sibling).trigger('change');					/*Force the checkbox to change*/
		}else{
			$(sibling).prop('checked', true);
			$(sibling).trigger('change');					/*Force the checkbox to change*/
		}
	});


	$('.sons').change(function() {
		//mirar a ver si hay alguno seleccionado
		if($('input[class = "sons"]:checked').length == 0){
			$("textarea").hide();
		}else{
			$('textarea').show();
			$('textarea').val('');
			$('input[class = "sons"]:checked').each(function(){
				var str = $('textarea').val();
				$('textarea').val(str + $(this).next().text() + '\n');
			})
		}
	});

	$('.submitButton').click(function() {
		if($('input[class = "sons"]:checked').length == 0){
			alert('Debe marcarse alguna opciom.');
		}else{
			/*post*/
		}
	});
});