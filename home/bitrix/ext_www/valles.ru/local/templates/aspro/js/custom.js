



window.onload = function () {
	new LazyLoad({
		elements_selector: ".lazy",
	});
	lazy();
};

function lazy() {
	//  $('.lazy').Lazy();
	//  // css background-image
	$('.lazy-bg').each(function () {
		var src = $(this).attr('data-src-bg');
		$(this).css('backgroundImage', 'url(' + src + ')');
	});
}

// 	========		ADULT CHECK 18+ 	===========

function yes() {
	document.getElementById("white_curtain").style.display = "none";
	document.cookie = "BITRIX_SM_ADULT=Y; max-age=2592000; path=/";    //  cookie live 30 days
}
function no() {
	window.location.href = 'https://valles.ru';
}
