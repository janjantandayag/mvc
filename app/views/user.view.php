<?php require('partials/head.php'); ?>
	<h1>Enter User</h1>
	<form method="POST" action="/users">
		<input type="text" name="name">	
		<button type="submit">Submit</button>
	</form>
	<ul class="users">
		<?php foreach($users as $user) :?>
			<li><?= $user->name ?></li>
		<?php endforeach; ?>
	</ul>
<?php require('partials/footer.php'); ?>