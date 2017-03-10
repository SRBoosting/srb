$(function() {
	$(".menuLeft").click(function() {
		var cod = $(this).data('cod');
		$(".menuRight").fadeOut('430', function() {
			$("#right" + cod).fadeIn();
		});
	});
});