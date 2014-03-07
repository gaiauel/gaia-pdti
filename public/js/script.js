$(document).ready(function(){
	$('.textarea').wysihtml5();

	$('#save_content').click(function(){
		$('.button_text').text('Carregando...');
		var attr = $(this).data('attr');
		var value = $('.textarea').val();
		var data = new Object();
		data[attr] = value;
		$.ajax({
			url: 'index.php/update',
			data: decodeURIComponent($.param(data)),
			success: function(){ $('.button_text').text('Salvar documento'); $.notify('Documento salvo com sucesso!', 'success'); }
		});
	});
});
