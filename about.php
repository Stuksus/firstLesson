<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>Антон</title>
			<style type="text/css">

				body{
					margin: 0px;
					padding:0px;
					font-size: 16px;
					font-family: Arial;
				}

				.form{
					float:left;
					margin-left: 10px;
					font-weight: bold;
				}

				.container{
					margin-left: 10px;
				}

				h1{
					display: inline-block;
					margin-top: 20px;
				}
				
				li{
					margin-bottom: 10px;
				}

				
				.answer{
					float:left;
					margin-left: 50px;
				}

				.style-list{	
					list-style-type: none;
					padding-left: 0px;
				}

			</style>	
		</head>
		<body>
			<?php
				$title		= 'Страница пользователя Антон';
		 		$firstName	= 'Антон';
		 		$Age		= '16';
		 		$City		= 'Москва';
		 		$Email		= 'itsoluution@gmail.com';
		 		$aboutMe	= 'Учусь на курсе Нетологии (PHP/SQL: back-end разработка и базы данных) ';
			?>
			<div class="container">
				<div class="title">
					<h1><?= $title?></h1>
				</div>
			<div class="content">
				<div class="form">
					<nav>
						<ul class="style-list">
							<li>
								Имя:
							</li>
							<li>
								Возраст:
							</li>
							<li>
								Адрес электронной почты:
							</li>
							<li>
								Город:
							</li>
							<li>
								О себе:
							</li>
						</ul>
					</nav>
				</div>
				<div class="answer">
					<nav>
						<ul class="style-list">
							<li>
								<?= $firstName?>
							</li>
							<li>
								<?= $Age?>
							</li>
							<li>
								<a href="mailto:<?= $Email?>"><?= $Email?></a>
							</li>
							<li>
								<?= $City?>
							</li>
							<li>
								<?= $aboutMe?>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			</div>
	 	</body>
	</html>
