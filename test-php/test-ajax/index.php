<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
CJSCore::Init(['fx', 'jquery2', 'ajax']);
?>

	<form id="form">
		<input type="text" name="text">
		<button type="submit">send</button>
	</form>

	<script>
		$(document).off('submit.jsSubmitForm').on('submit.jsSubmitForm', '#form', function (e) {
			e.preventDefault();
			$form = $('#form');
			var $btnSent = $form.find('button'),
				// formData = new FormData(this),
				formData = $form.serializeArray(),
				url = '/ajax/',//$form.attr('action'),
				method = $form.attr('method') || 'POST';
			$.ajax({
				url: url,
				method: method,
				data: formData,
				dataType: 'json',
				//cache: false,
				//contentType: false,
				//processData: false
			}).done(function (data) {

				console.log(data);

			}).fail(function (jqXHR, textStatus) {
				console.log("Ajax request failed: " + textStatus);
			});
		});


	</script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>