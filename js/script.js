// Header nav link
const header_nav_list = ['#navService', '#navNews', '#navPlan', '#navLocation', '#navFaq'];
const header_spnav_list = ['#spNavService', '#spNavNews', '#spNavPlan', '#spNavLocation', '#spNavFaq'];
const header_target_list = ['#service', '#news', '#plan', '#location', '#faq'];

// Service nav link
const service_nav_list = ['#navTraining', '#navConditioning', '#navCapsule'];
const service_target_list = ['#training', '#conditioning', '#capsule'];

$(function() {
	// Header nav link
	for(let i = 0; i < header_nav_list.length; i++) {
		$(header_nav_list[i]).click(function() {
			$('html, body').animate({scrollTop: $(header_target_list[i]).offset().top - 90}, 600, 'swing');
		});
	}

	// Burger menu
	$('#burger').on('click', function() {
		$('#burgerInner').toggleClass('is-open');
		$('#spmenu').slideToggle();
	});

	// Header spnav link
	for(let i = 0; i < header_spnav_list.length; i++) {
		$(header_spnav_list[i]).click(function() {
			$('#spmenu').slideUp(0);
			$('#burgerInner').toggleClass('is-open');
			$('html, body').animate({scrollTop: $(header_target_list[i]).offset().top - 70}, 600, 'swing');
		});
	}

	// Service nav link scroll
	for(let i = 0; i < service_nav_list.length; i++) {
		if($(window).width() < 600) {
			$(service_nav_list[i]).click(function() {
				$('html, body').animate({scrollTop: $(service_target_list[i]).offset().top - 86}, 600, 'swing');
			});
		} else {
			$(service_nav_list[i]).click(function() {
				$('html, body').animate({scrollTop: $(service_target_list[i]).offset().top - 20}, 600, 'swing');
			});
		}
	}
});


// Accordion Menu
// LOCATION
$('.js-location').each(function() {
	$(this).parent().next().slideUp(0);
	$(this).on('click', function() {
		$(this).parent().next().slideToggle();
	});
});

// FAQ
$('.js-details-summary').each(function() {
	$(this).on('click', function(event) {
		$(this).toggleClass("is-active");
		// デフォルトの挙動を無効化
		event.preventDefault();

		if($(this).parent($('.js-details')).attr('open')) {
			$(this).nextAll($('.js-details-content')).slideUp(500, function() {
				$(this).parent($('.js-details')).removeAttr('open');
				$(this).show();
			});
		} else {
			$('.js-details-summary').not($(this)).removeClass('is-active');
			$('.js-details-content').not($(this).nextAll($('.js-details-content'))).slideUp(500, function() {
				$(this).parent($('.js-details')).removeAttr('open');
				$(this).show();
			});
			$(this).parent($('.js-details')).attr('open', 'true');
			$(this).nextAll($('.js-details-content')).hide().slideDown(500);
		}
	});
});


// Form Enter Disable
$(function() {
	$('input').on('keydown', function(e) {
		if((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
			return false;
		} else {
			return true;
		}
	});

	$('select').focus(function() {
		$(this).on('keydown', function(e) {
			if((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
				return false;
			} else {
				return true;
			}
		});
	});
});

//Option Color Change
$(function() {
	if($('.wpcf7-date').val() == '') {
		$('.wpcf7-date').addClass('is-init');
	}
	if($('.wpcf7-select').val() == '') {
		$('.wpcf7-select').css('color', '#CDD6DD');
	}
});
$('.wpcf7-select').change(function() {
	if($(this).val() == '') {
		$(this).css('color', '#CDD6DD');
	} else {
		$(this).css('color', '#333');
	}
});
$('.wpcf7-date').change(function() {
	if($(this).val() == '') {
		$(this).addClass('is-init');
	} else {
		$(this).removeClass('is-init');
	}
});
