<html>
	<head>
		<title>Ideas login</title>
		<link rel="stylesheet" href="<?=site_url("assets/css/screen.css")?>">
	</head>
	<body>
	<div class="container">
	<?if($this->session->flashdata("message")):?>
		<div class="error"><?=$this->session->flashdata("message");?></div>
	<?endif?>
		<form method="POST" action="<?=site_url("login/auth")?>">
		<label>Email
			<input class="text" type="text" name="email">
		</label>
		<label>Password
			<input class="text" type="password" name="password">
		</label>
			<input type="submit" name="login">
		</form>
		</div>
	</body>
</html>