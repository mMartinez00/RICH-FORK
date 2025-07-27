<?php if(session()->has('message')): ?>
	<div class="container">
		<div class="alert alert-info"> <?php echo e(session('message')); ?> </div>
	</div>
<?php endif; ?>
