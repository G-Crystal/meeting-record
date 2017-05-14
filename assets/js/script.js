$(function () {
    $('#dtime').datetimepicker();

	$("#view_first").on("click", function(event) {
		$("#pagenum").val(1);
		$("#aForm").submit();
	});

	$("#view_prev").on("click", function(event) {
		$("#pagenum").val(Math.max(1, parseInt($("#pagenum").val()) - 1));
		$("#aForm").submit();
	});

	$("#view_next").on("click", function(event) {
		$("#pagenum").val(Math.min(parseInt($("#lastnum").val()), parseInt($("#pagenum").val()) + 1));
		$("#aForm").submit();
	});

	$("#view_last").on("click", function(event) {
		$("#pagenum").val(parseInt($("#lastnum").val()));
		$("#aForm").submit();
	});

	$("#limit").on("change", function(event) {
		$("#aForm").submit();
	});

	$("#pagenum").on("keydown", function(event) {
		if(event.keyCode == 13) {
			if( isNaN($("#pagenum").val()) || (parseInt($("#pagenum").val()) < 0) )
				$("#pagenum").val(1);
			else if(parseInt($("#pagenum").val()) > parseInt($("#lastnum").val()))
				$("#pagenum").val($("#lastnum").val());
			$("#aForm").submit();
		}
	});

	$("#search_key").on("keydown", function(event) {
		if(event.keyCode == 13) {
			search();
		}
	});

	$("#search").on("click", function(event) {
		search();
	});

	search = function() {
		var val = $("#search_key").val().trim();
		$("#search_key").val(val);
		$("#aForm").submit();
	}
});