$(document).ready(function () {
	$('#loginf').submit(function () {
		var formID = $(this).attr('id');
		var formNm = $('#' + formID);
		$.ajax({
			type: "POST",
			url: 'script/auth.php',
			data: formNm.serialize(),
			success: function (data) {
			 // Вывод текста результата отправки
			 if (data=="reload index") {
			 	location.reload(true);
			 }
			 else {
			 	$('#info').html(data);
			 }
		},
		error: function (jqXHR, text, error) {
			 // Вывод текста ошибки отправки
			 $('#info').html(error);
			}
		});
		return false;
	});
		$('#editUser').submit(function () {
		var formID = $(this).attr('id');
		var formNm = $('#' + formID);
		$.ajax({
			type: "POST",
			url: 'script/edit.php',
			data: formNm.serialize(),
			success: function (data) {
			 // Вывод текста результата отправки
			 $('#info').html(data);
			},
			error: function (jqXHR, text, error) {
			 // Вывод текста ошибки отправки
			 $('#info').html(error);
			}
		});
		return false;
	});
		$('#addUser').submit(function () {
		var formID = $(this).attr('id');
		var formNm = $('#' + formID);
		$.ajax({
			type: "POST",
			url: 'script/reg.php',
			data: formNm.serialize(),
			success: function (data) {
			 // Вывод текста результата отправки
			 $('#info').html(data);
			},
			error: function (jqXHR, text, error) {
			 // Вывод текста ошибки отправки
			 $('#info').html(error);
			}
		});
		return false;
	});
});
