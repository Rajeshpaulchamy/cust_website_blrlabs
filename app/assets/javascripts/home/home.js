jQuery(document).ready(function($){

	/*=================================================================
	 * Set active class for navbar
	 *=================================================================*/
	var setActive = function (idSelected) {

		$(".nav").find(".active").removeClass("active");
		
		if(window.location.href.indexOf("platform-development") > -1  || 
			window.location.href.indexOf("iot-framework") > -1 ||
			window.location.href.indexOf("fleet-telematics") > -1 ||			
			window.location.href.indexOf("home-automation") > -1 ||
			window.location.href.indexOf("safety-geofencing") > -1 ||
			window.location.href.indexOf("enterprise-digital-transformation") > -1 ||
			window.location.href.indexOf("enterprise-mobility") > -1) {
			$("#nav-solutions").addClass("active");
		} else if(window.location.href.indexOf("case-study") > -1) {
			$("#nav-casestudy").addClass("active");
		} else if(window.location.href.indexOf("semiconductor") > -1  || 
			window.location.href.indexOf("automotive") > -1 ||
			window.location.href.indexOf("bsp") > -1 ||			
			window.location.href.indexOf("systemintegration") > -1 ||
			window.location.href.indexOf("consumeriot") > -1 ||
			window.location.href.indexOf("industrialiot") > -1 ||
			window.location.href.indexOf("smac") > -1) {
			$("#nav-services").addClass("active"); 
		} else if(window.location.href.indexOf("about-us") > -1) {
			$("#nav-about-us").addClass("active");
		} else if (window.location.href.indexOf("careers") > -1) {
			$("#nav-careers").addClass("active");
		}  else if (window.location.href.indexOf("contact-us") > -1) {
			$("#nav-contact-us").addClass("active");
		}  else {
			$("#nav-home").addClass("active");
		}
	};

	$(".nav a").on("click", function(){
		$(".nav").find(".active").removeClass("active");
		setActive(this.hash);
	});
	
	setActive();

	/* 
	 * while mouse hover the carousel will stop - 
	 * to remove this feature added the below code 
	 */
	$('.carousel').carousel({
		pause: "false",
		interval: 10000
	});

	/*$('.nav').nav();*/
	
	$("#home-slider").crosscover({
		inClass: 'fade-in',
		outClass: 'fade-out',
		interval: 10000,
		startIndex: 0,
		autoPlay: true,
		dotsNav: false,
		controller: true,
		controllerClass: 'crosscover-controller',
		prevClass: 'crosscover-prev',
		nextClass: 'crosscover-next',
		playerClass: 'crosscover-player',
		playerInnerHtml: '',
		prevInnerHtml: '<span class="crosscover-icon-prev"></span>',
		nextInnerHtml: '<span class="crosscover-icon-next"></span>'
	});

	$("#still").crosscover({
		inClass: '',
		outClass: '',
		interval: 0,
		startIndex: 0,
		autoPlay: false,
		dotsNav: false,
		controller: false,
		controllerClass: 'crosscover-controller',
		prevClass: 'crosscover-prev',
		nextClass: 'crosscover-next',
		playerClass: 'crosscover-player',
		playerInnerHtml: '<span class="crosscover-icon-player"></span>',
		prevInnerHtml: '<span class="crosscover-icon-prev"></span>',
		nextInnerHtml: '<span class="crosscover-icon-next"></span>'
	});

	/* bootstrap collapse (accordian) code to allow one row to be expanded at a time used in "careers" page*/
	$('.collapse').on('show.bs.collapse', function () {
		$('.collapse.in').collapse('hide');
	});

	/*when a group is shown, save it as the active accordion group*/
	$("tr[data-toggle='collapse']").click(function(evnt) {
		var active;
		active = $(evnt.currentTarget).attr("aria-expanded");
		if(active == "true") {
			$.cookie('activeAccordionGroup', "#hide-form");
			$("#career-form").detach().appendTo('#hide-form');
		} else {
			active = $(evnt.currentTarget).attr("data-target");
			$.cookie('activeAccordionGroup', active);
			$("#career-form").detach().appendTo(active);
		}
	});

	var last = $.cookie('activeAccordionGroup');
	if(last) {
		$("tr[data-target='" + last + "']").click();
	}

});



