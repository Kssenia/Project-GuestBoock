<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple bootstrap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<!--<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="/css/style-simple-bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

	<form role="form" action="/guestbook" method="POST" id="guestForm">
		<div class="form-group">
			<input type="text" name="nameGroup" placeholder="Ваше имя" >
		</div>
		<div class="form-group">
			<input type="email" name="emailGroup" placeholder="Ваш имейл">
		</div>
		<div class="form-group">
			<textarea name="" name="textGroup" cols="30" rows="10" placeholder="Текст сообщения"></textarea>
		</div>
		<button type="submit" id="btnSend">Отправить</button>
	</form>	
	<table   border="1" cellspacing="0" cellpadding="15" width="90%" class="tab">

		<tr>
			<td >Имя</td>
			<td >Email</td>
			<td >Сообщение</td>
		</tr>

		<?php 
		foreach ($allMessages as $message) { 
		?> 
		<tr class="center1">
			<td class="center1"><?=$message['nameGroup']?></td>
			<td class="center1"><?=$message['emailGroup']?></td>
			<td class="center1"><?=$message['textGroup']?></td>
		</tr>
		<?php  } ?>
	</table>


	<script>
$(document).ready( function(e) {
	$('#guestForm').submit( function(e) {
		e.preventDefault();

		$.ajax({
			method: "POST",
			url: "/guestbook",
			data: { 
				name: $('#nameGroup').val(), 
				email: $('#emailGroup').val(),
				message:  $('#textGroup').val()
			}
			success: function(){}
		}).done( function( data ) {

			var res = JSON.parse( data );

			if( res.result > 0 ) {
				el = document.createElement('div');
				$(el).html( $('#nameGroup').val() + '<br/>' + 
					$('#emailGroup').val() + '<br/>' + 
					$('#textGroup').val() + '<br/><br/><hr/>' );
				console.log(el);
				$('#textGroup').prepend(el);
			}    
		});
	});
});
</script>
</body>
</html>