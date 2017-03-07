<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="function.php" role="form" method="POST" name="guestForm" enctype="multipart/form-data">
		<div class="form-group">
			<input class="form-control" type="text" name="nameGroup" class="name"" placeholder="Ваше имя" >
		</div>
		<div class="form-group">
			<input class="form-control" type="email" name="emailGroup" class="email" placeholder="Ваш имейл">
		</div>
		<div class="form-group">
			<textarea  class="form-control" name="textGroup" class="text" cols="30" rows="10" placeholder="Текст сообщения"></textarea>
		</div>

		<input type="hidden" name="MAX_FILE_SIZE" value="5000000">
		<input name="userfile" type="file">
		<input type="submit" id="btnSend" value="Отправить">
	</form>	
	
</body>
</html>