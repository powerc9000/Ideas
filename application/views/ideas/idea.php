<html>
	<head>
		<title><?=$idea->title?> | Ideas</title>
		<link rel="stylesheet" href="<?=site_url("assets/css/screen.css")?>">
	</head>
	<body>
	<div class="container">
	<?if($this->session->flashdata("message")):?>
			<div class="success"><?=$this->session->flashdata("message");?></div>
	<?endif?>
	<a href="<?=site_url()?>"> &lt; Go back</a>
		<h1><?=$idea->title?></h1>
		<p><?=$idea->idea?></p>
		<hr>
		<h2>All comments</h2>
		
		<?$comments = $this->idea->get_comments_for_idea($idea->id)?>
		<?foreach ($comments as $comment):?>
		<hr>
			<h3><?=$this->user->get_name_by_id($comment->user_id)?> said</h3>
				<p><?=$comment->comment?></p>
				
		<?endforeach?>
		<hr>
		<h2>Comment on this</h2>
		<?$user_id=$this->session->userdata('id')?>
		<form action="<?=site_url("welcome/new_comment/$idea->id/$user_id")?>" method="post">
			<label>Comment<br>
			<textarea name="comment"></textarea>
			</label>
			<br>
			<input type="submit" value="Comment">
		</form>
		</div>
	</body>
</html>