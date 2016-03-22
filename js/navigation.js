$(function() {

	/* Fixes the navigation active class for includes - need to find a better workaround in the future */

	$("#home a:contains('Welcome')").parent().addClass('active');
	$("#about a:contains('About RTS')").parent().addClass('active');
	$("#mold a:contains('Mold Services')").parent().addClass('active');
    $("#asbestos a:contains('Asbestos Services')").parent().addClass('active');
	$("#faq a:contains('FAQ')").parent().addClass('active');
	
});