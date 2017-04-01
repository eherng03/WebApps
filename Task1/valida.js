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


	$('label').click(function() {
		var sibling = $(this).prev();
		if($(sibling).prop('checked')){
			$(sibling).prop('checked', false);
			$('td').find('input').change();
		}else{
			$(sibling).prop('checked', true);
			$('td').find('input').change();
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
				$('textarea').val(str + '\n' + $(this).next().text());
			})


		}
	});
});