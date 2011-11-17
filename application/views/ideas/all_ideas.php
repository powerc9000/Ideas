<html>
	<head>
		<title>All Ideas</title>
		<link rel="stylesheet" href="<?=site_url("assets/css/screen.css")?>">
	</head>
	<body>
		<div class="container">
		<h1>All the ideas that are awesome</h1>
		<a href="<?=site_url("welcome/new_idea")?>">Make new idea</a>
		<hr>
		<?foreach($ideas as $idea):?>

			<h2><a href="<?=site_url("welcome/idea/$idea->id")?>"><?=$idea->title?></a> ~ <small>Pitched by <?=$this->user->get_name_by_id($idea->user_id)?></small></h2>
			<p><?=substr($idea->idea,0,20)?> ... (<a href="<?=site_url("welcome/idea/$idea->id")?>">Read more</a>)</p>
			<hr>
		<?endforeach?>
		</div>
	</body>
</html>