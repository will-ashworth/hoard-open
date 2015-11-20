$(document).ready(function() {
	$('.snippet-preview').click(function() {
		$('.snippet-preview').removeClass('active');
		$(this).addClass('active');
		
		var id = $(this).attr('id');
		
		$('div[snippet]').removeClass('visible').addClass('hidden');
		$('div[snippet=' + id + ']').removeClass('hidden').addClass('visible');	
	});
});