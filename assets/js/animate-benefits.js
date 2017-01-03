jQuery(document).ready(function($) {
    console.log( "animate benefits" );



    var benefits = $('#coaching-benefits');
    	// animateClass = 'animated fadeInUp';

	$(window).load(function() {
		if ($("#coaching-benefits li").css("opacity") == 0 ){
			console.log('DO IT');
		}
		$('#coaching-benefits li').each(function(index) {
			$(this).delay(index * 2000).animate({ 
				// fontSize: '1.5rem',
				opacity: 1,
			}, 1000, function(){
				$(this).animate({
					fontSize: '1rem',
				}, 1000);
			});
		});

	});

    // benefits.find('li:first-child').addClass(animateClass);

});