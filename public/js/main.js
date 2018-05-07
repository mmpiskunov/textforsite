/*
 * console.log();
 */
function echo(string){
	console.log(string);
}
////////////////////////////////////////////////////////////////////////

/*****************************************
 *	Global variables
 *****************************************/
var jspSettings = {
		autoReinitialise: true
};
/*****************************************
 *	Functions
 *****************************************/
function loadText(vid){
	$('#vtext').load('variator.php', {idt:vid}, function(){
		$('.textarea').data('jsp').reinitialise();
	});
}
/*****************************************
 *	Event listeners
 *****************************************/
$(document).on('click', '#vrec', function(e){
	e=e||window.event;
	e.preventDefault();
	
	var vid = $('#vid').val();
	loadText(vid);
});
$(document).on('change', '#vid', function(){
	var vid = $(this).val();
	loadText(vid);
});
$(document).on('click', '.next', function(e){
	e=e||window.event;
	e.preventDefault();
	$('html,body').stop().animate({ scrollTop: $('#target-el').offset().top }, 1000);
});
$(document).on('click', '.to-top', function(e){
	e=e||window.event;
	e.preventDefault();
	$('html,body').stop().animate({ scrollTop: $('#top').offset().top }, 1000);
});
$(document).on('click', '.button.form', function(e){
	e=e||window.event;
	e.preventDefault();
	$('#form-submit').submit();
});
/*
*
*	AJAX load & errors
*
*/
$(document).on('ajaxStart', function(){
	$('#loadanimation').show();
});
$(document).on('ajaxStop', function(){
	$('#loadanimation').hide();
});
$(document).ajaxError(function(event, jqxhr, settings, thrownError){
	console.log(event);
	console.log(jqxhr.responseText);
	console.log(settings);
	console.log(thrownError);
});
/*****************************************
 *	document ready function
 *****************************************/
$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
	$('.select').select2({
		minimumResultsForSearch: Infinity,
		width: "100%"
	});
	$('.textarea').jScrollPane(jspSettings);
	loadText(1);
});