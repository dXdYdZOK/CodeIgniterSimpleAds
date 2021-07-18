<?php if($category_id!==false): ?>
	<div class='controls'>
		<a href="/ads/add/<?=$category_id?>">Добавить объявление в выбранную категорию</a>
	</div>
<?php endif; ?>
<div id='ads'>
	<?php foreach($ads as $ad): ?>
		<div class='ad'>
			<h2><?=$ad['title']?></h2>
			<p><?=$ad['text']?></p>
		</div>
	<?php endforeach; ?>
</div>