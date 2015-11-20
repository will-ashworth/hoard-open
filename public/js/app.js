$(document).ready(function() {
	$('.snippet-preview').click(function(e) {
		console.log(e.target);
		if($(e.target).hasClass('tag') || $(e.target).hasClass('fa')) {
			return;
		}
		$('.snippet-preview').removeClass('active');
		$(this).addClass('active');
		
		var id = $(this).attr('id');
		
		$('div[snippet]').removeClass('visible').addClass('hidden');
		$('div[snippet=' + id + ']').removeClass('hidden').addClass('visible');	
	});
	
	$('#search').click(function(e) {
        e.preventDefault();
		$('#searchForm').submit();
	});
	
	$('.tag.favourite').click(function(e) {
		$(this).toggleClass('active');
	});
});