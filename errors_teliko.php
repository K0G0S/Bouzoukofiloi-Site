<?php if(count($errors) > 0 ) : ?>
<div>
	?php foreach($error as $error) : ?>
		<p><?php echo $error ?></p>
	<?php endforeach ?>
</div>
