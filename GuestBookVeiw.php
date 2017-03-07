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
<h2><?php if(isset($_SESSION['notice'])){
                echo $_SESSION['notice'];
            } ?></h2>
	<form role="form" action="/guestbook" method="POST" id="guestForm">
		<div class="form-group">
<input class="form-control" type="text" name="nameGroup" placeholder="Ваше имя" value=<?php echo '"'.$_COOKIE['name'].'"';?>>
		</div>
		<div class="form-group">
			<input class="form-control" type="email" name="emailGroup" placeholder="Ваш имейл" value=<?php echo '"'.$_COOKIE['email'].'"';?>>
		</div>
		<div class="form-group">
			<textarea  class="form-control" name="textGroup" cols="30" rows="10" placeholder="Текст сообщения"></textarea>
		</div>
		<button type="submit" id="btnSend">Отправить</button>
	</form>	
	<table id="messages"  border="1" cellspacing="0" cellpadding="15" width="90%" class="tab">

		<tr id="start">
			<td >Имя</td>
			<td >Email</td>
			<td >Сообщение</td>
			<td >Время</td>
			<td >file link</td>
		</tr>

		<?php 
		foreach ($allMessages as $message) { 
		?> 
		<tr class="center1">
			<td class="center1"><?=$message['nameGroup']?></td>
			<td class="center1"><?=$message['emailGroup']?></td>
			<td class="center1"><?=$message['textGroup']?></td>
			<td class="center1"><?=$message['time']?></td>
			<td class="center1"><?=$message['filename']?></td>
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
				nameGroup: $('[name ="nameGroup"]').val(), 
				emailGroup: $('[name ="emailGroup"]').val(),
				textGroup:  $('[name = "textGroup"]').val()
			},
			success: function(data){
				console.dir('done');
			}
			
			}).done( function( data ) {

			    var res = JSON.parse( data );
			     console.log(res);
			    

 			     var el = document.createElement('tr');
			     $(el).html( 
			     	'<td>'+res.message.nameGroup+'<td>' + '<br/>' + 
			        '<td>'+res.message.emailGroup+'<td>' + '<br/>' + 
			        '<td>'+res.message.textGroup+'<td>' + '<br/>' + 
			        '<td>'+res.message.time+'<td>' + '<br/><br/><hr/>' );
			     console.log(el);
			     $('#messages').prepend(el);
			   
		});        
	});
});
</script>
</body>
</html>