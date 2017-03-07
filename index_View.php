<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Simple bootstrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
		<!--<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">-->
		<link rel="stylesheet" href="css/style-simple-bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row line">
					<div class="col-md-7 col-xs-12">
						<div class="logo">
							<a href="#"></a>
						</div>
					</div>
					<div class="col-md-5 col-xs-12">
						<nav class="menu">
							<menu>
								<li><a href="#">Главная</a></li>
								<li><a href="#">Новости</a></li>
								<li><a href="#">Каталог</a></li>
								<li><a href="#">Контакты</a></li>
							</menu>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<div class="start">
			<div class="container">
				<div class="row-fluid">
					<div class="col-md-6">
						<h2>Главная страница</h2>
					</div>
				</div>
			</div>
		</div>	
	<div class="circle_team">
			<div class="container">
				<div class="row">
					
						<div class="col-md-4">
						<div class="circle">
							<div class="circle_link">
								<a href="#">КУПИТЬ</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="circle">
							<div class="circle_link">
								<a href="#">ПРОДАТЬ</a>
							</div>
						</div>
					</div>	
					<div class="col-md-4">
						<div class="circle">
							<div class="circle_link">
								<a href="#">ЗАКАЗАТЬ</a>
							</div>
						</div>
					</div>		
					
				</div>
			</div>
	</div>
			<div class="info clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-6  .col-md-offset-6 nameGroup">
							<form action="/guestbook" role="form" method="POST" name="guestForm" enctype="multipart/form-data">
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
						</div>
						<div class="col-md-6">
							<div class="hi_there">
								<p class="text-left">"Hi there! We are the new kids on the block.Hi there!"</p>
								<p class="text-left">"Hi there! We are the new kids on the block.Hi there!"</p>
								<p class="text-left">"Hi there! We are the new kids on the block.Hi there!"</p>
								<p class="text-left">"Hi there! We are the new kids on the block.Hi there!"</p>
							</div>	
						</div>
					</div>
				</div>	
			</div>
				<div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-xs-12">
							<a  href="#">Главная</a>
							</div>
							<div class="col-md-3 col-xs-12">
								<a href="#">Новости</a>
							</div>
							<div class="col-md-3 col-xs-12">
								<a href="#">Каталог</a>
							</div>		
							<div class="col-md-3 col-xs-12">
								<a href="#">Контакты</a>
							</div>				
							</div>
						</div>
				</div>
				<div class="companiName">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<p class="text-center">Company Name <span>&copy</span>-2017</p>
							</div>
						</div>	
					</div>	
				</div>
			</body>
	</html>