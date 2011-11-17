<html>
	<head>
		<title>New Idea</title>
		<link rel="stylesheet" href="<?=site_url("assets/css/screen.css")?>">
	</head>
	<body>
	<div class="container">
		<h1>Make a new idea</h1>
		<form action="<?=site_url("welcome/new_idea")?>" method="post">
		<label>Title<br>
			<input class="title" type="text" name="title">
		</label>
			<br>
		<label>Idea description<br>
			<textarea name="idea" rows="10" cols="50"></textarea>
		</label>
			<br>
			<input type="hidden" name="submitted" value="true">
			<input type="submit" value="Add">
		</form>
		</div>
	</body>
</html>