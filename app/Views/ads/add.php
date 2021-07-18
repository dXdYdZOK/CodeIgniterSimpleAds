<?php if(isset($errors)): ?>
	<?php foreach($errors as $error): ?>
		<div><?=$error?></div>
	<?php endforeach; ?>
<?php endif; ?>
<h3>Добавление объявления</h3>
<form method="POST" action='/ads/add/<?=$category_id?>'>
	<div class="mb-3">
		<label for='ti' class="form-label">Заголовок:</label>
		<input class="form-control" type='text' name='title' id='t' <?php if(isset($data)): ?>value="<?=$data['title']?>"<?php endif; ?>/>
		<?php if(isset($errors)) { if(isset($errors['title'])) { ?><small class="form-text text-muted"><?=$errors['title']?></small><?php }} ?> 
	</div>
	<div class="mb-3">
		<label for='te' class="form-label">Текст:</label>
		<textarea class="form-control" name='text' id='te'><?php if(isset($data)) if(isset($data['text'])) echo $data['text']; ?></textarea>
		<?php if(isset($errors)) { if(isset($errors['text'])) { ?><small class="form-text text-muted"><?=$errors['text']?></small><?php }} ?> 
	</div>
	<div class="mb-3">
		<button class="btn btn-primary" type='submit' name='submit' value='1'>Сохранить</button>
	</div>
</form>