$(document).ready(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 20) {
			$('#topBtn').fadeIn();
		} else {
			$('#topBtn').fadeOut();
		}
	});

	$('#topBtn').click(function() {
		$("html, body").animate({
			scrollTop: 0
		}, 1000);
		return false;
	});
});

$(document).ready(function() {
    $('a.scroll[href*=\\#]').on('click', function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop : $(this.hash).offset().top
        }, 500);
    });
});