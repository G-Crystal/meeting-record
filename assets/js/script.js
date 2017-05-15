$(function () {
    $('#dtime').datetimepicker();

	$("#view_first").on("click", function(event) {
		$("#pagenum").val(1);
		submit_action($("#aForm"));
	});

	$("#view_prev").on("click", function(event) {
		$("#pagenum").val(Math.max(1, parseInt($("#pagenum").val()) - 1));
		submit_action($("#aForm"));
	});

	$("#view_next").on("click", function(event) {
		$("#pagenum").val(Math.min(parseInt($("#lastnum").val()), parseInt($("#pagenum").val()) + 1));
		submit_action($("#aForm"));
	});

	$("#view_last").on("click", function(event) {
		$("#pagenum").val(parseInt($("#lastnum").val()));
		submit_action($("#aForm"));
	});

	$("#limit").on("change", function(event) {
		submit_action($("#aForm"));
	});

	$("#pagenum").on("keydown", function(event) {
		if(event.keyCode == 13) {
			if( isNaN($("#pagenum").val()) || (parseInt($("#pagenum").val()) < 0) )
				$("#pagenum").val(1);
			else if(parseInt($("#pagenum").val()) > parseInt($("#lastnum").val()))
				$("#pagenum").val($("#lastnum").val());
			submit_action($("#aForm"));
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
		submit_action($("#aForm"));
	}

	$(".editable-row").on("click", function(event) {
		$("#ref_index").val(event.currentTarget.attributes['ref'].value);

		submit_action($("#editForm"));
	});

	submit_action = function(obj) {
		obj.submit();
	};
});