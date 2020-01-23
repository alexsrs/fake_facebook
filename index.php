<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Facebook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="center">
			<div class="logo">
				<h2>Facebook</h2>
			</div><!--logo-->
			<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou telefone:</p>
					<input type="email" />
				</div><!--form-element-->
				<div class="form-element">
					<p>Senha:</p>
					<input type="password" />
				</div><!--form-element-->
				<div class="form-element">
					<input type="submit" name="acao" value="Enviar" />
				</div><!--form-element-->
			</form><!--form-login-->
			<div class="clear"></div><!-- limpar flutuação-->
			</div><!--center-->
	</header>
	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<h2>O facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h2>
				<img src="images/social.png" />
			</div><!--img-pessoas-->
			<div class="abrir-conta">
				<h2>Abra sua conta</h2>
				<h3>É gratuito e sempre será.</h3>
				<form class="criar-conta">
					<div class="w50">
						<input type="text" placeholder="Nome" name="nome">
					</div><!--w50-->
					<div class="w50">
						<input type="text" placeholder="Sobrenome" name="sobrenome">
					</div><!--w50-->
					<div class="w100">
						<input type="email" placeholder="E-mail" name="email">
					</div><!--w100-->
					<div class="w100">
						<input type="password" placeholder="Senha" name="senha">
					</div><!--w100-->
					<div class="w100">
						<h2>Data de nascimento:</h2>
						<select name="dia" class="nascimento">
							<?php
								for ($i=1; $i <= 31 ; $i++) { 
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<select name="mes" class="nascimento">
							<option value="01">Janeiro</option>
							<option value="02">Fevereiro</option>
							<option value="03">Março</option>
							<option value="04">Abril</option>
							<option value="05">Maio</option>
							<option value="06">Junho</option>
							<option value="07">Julho</option>
							<option value="08">Agosto</option>
							<option value="09">Setembro</option>
							<option value="10">outubro</option>
							<option value="11">Novembro</option>
							<option value="12">Dezembro</option>
						</select>
						<select name="ano" class="nascimento">
							<?php
								for ($i=1900; $i <= 2020 ; $i++) { 
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<div class="clear"></div><!--clear-->
					</div><!--w100-->
					<div class="w100">
						<div class="input-radio">
							<input type="radio" name="sexo" value="masculino" />
							<h2>Masculino</h2>
						</div><!--input-radio-->						
						<div class="input-radio">
							<input type="radio" name="sexo" value="feminino" />
							<h2>Feminino</h2>
						</div><!--input-radio-->
						<div class="clear"></div><!--clear-->
					</div><!--w100-->
					<div class="w100">
						<p>Ao clicar em Cadastre-se, você concorda com nossos <a href="#">Termos, Política de Dados e Política de Cookies</a>. Você pode receber notificações por SMS e pode cancelar isso quando quiser.</p>
					</div><!--w100-->
					<div class="w100">
						<input type="submit" name="acao" value="Cadastrar!">
					</div><!--w100-->
					<div class="clear"></div><!--clear-->
				</form><!--criar-conta-->
			</div><!--abrir-conta-->
			<div class="clear"></div><!--clear - limpa a flutuação após utilizar float-->
		</div><!--center-->
	</section><!--main-->
	<section class="linguas">
		<div class="center">
			<a class="selected-lingua" href="index.php">Português (Brasil)</a>
			<a href="#">English (US)</a>
			<a href="#">Español</a>
			<a href="#">Français (France)</a>
			<a href="#">Italiano</a>
			<a href="#">Deutsch</a>
			<a href="#">العربية<</a>	
			<a href="#">हिन्दी</a>
			<a href="#">中文(简体)</a>
			<a href="#">日本語</a>	
		</div><!--center-->
		<div style="border: 0; padding-top: 10px;" class="center">
			<a href="#">Sign Up</a>
			<a href="#">log In</a>
			<a href="#">Messenger</a>
			<a href="#">Facebook Lite</a>
			<a href="#">Watch</a>
			<a href="#">People</a>
			<a href="#">Pages</a>
			<a href="#">Page Categories</a>
			<a href="#">Places</a>
			<a href="#">Games</a>
			<a href="#">Locations</a>
			<a href="#">Marketplace</a>
			<a href="#">Groups</a>
			<a href="#">Instagram</a>
			<a href="#">Local</a>
			<a href="#">Fundraisers</a>
			<a href="#">Services</a>
			<a href="#">About</a>
			<a href="#">Create Ad</a>
			<a href="#">Create Page</a>
			<a href="#">Developers</a>
			<a href="#">careers</a>
			<a href="#">Privacy</a>
			<a href="#">Cookies</a>
			<a href="#">Ad Choices</a>
			<a href="#">Terms</a>
			<a href="#">Help</a>
		</div><!--center-->
		<div style="border: 0; padding-top: 20px;" class="center">
			<a style="color: #ccc;" href="#">Facebook © 2020</a>
		</div><!--center-->
	</section><!--linguas-->
</body>
</html>