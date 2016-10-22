<?php $__env->startSection('title','Inicio'); ?>

<?php $__env->startSection('contenido'); ?>
<img class="img-responsive im" src="../../img/conocenoss.jpg">
<div class="container-fluid">
	<h1>hola</h1>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>