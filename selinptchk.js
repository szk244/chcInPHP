$(document).ready(function(){
	$(function() {
		$( "#tabs" ).tabs();
		$( "#accordion" ).accordion();
	});
	
	$('#EXS_Num').focus(function() {
		$('#EXS_Span').val('');
		$('#Switch_Name').val('');
		$('#Chan_Group').val('');
		$('#L_Type').val('');
		$('#LineID').val('');
		$('#FreeSearch').val('');
	});
	$('#EXS_Span').focus(function() {
		$('#EXS_Num').val('');
		$('#Switch_Name').val('');
		$('#Chan_Group').val('');
		$('#L_Type').val('');
		$('#LineID').val('');
		$('#FreeSearch').val('');
	});
	$('#Switch_Name').focus(function() {
		$('#EXS_Num').val('');
		$('#EXS_Span').val('');
		$('#Chan_Group').val('');
		$('#L_Type').val('');
		$('#LineID').val('');
		$('#FreeSearch').val('');
	});
	$('#Chan_Group').focus(function() {
		$('#EXS_Num').val('');
		$('#EXS_Span').val('');
		$('#Switch_Name').val('');
		$('#L_Type').val('');
		$('#LineID').val('');
		$('#FreeSearch').val('');
	});
	$('#L_Type').focus(function() {
		$('#EXS_Num').val('');
		$('#EXS_Span').val('');
		$('#Switch_Name').val('');
		$('#Chan_Group').val('');
		$('#LineID').val('');
		$('#FreeSearch').val('');
	});
	$('#LineID').focus(function() {
		$('#EXS_Num').val('');
		$('#EXS_Span').val('');
		$('#Switch_Name').val('');
		$('#Chan_Group').val('');
		$('#L_Type').val('');
		$('#FreeSearch').val('');
	});
	$('#FreeSearch').focus(function() {
		$('#EXS_Num').val('');
		$('#EXS_Span').val('');
		$('#Switch_Name').val('');
		$('#Chan_Group').val('');
		$('#L_Type').val('');
		$('#LineID').val('');
	});
//--------------------------
$(function() {
		var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#EXS_Num" ).autocomplete({
			source: availableTags
		});
	});
//--------------------------

});
