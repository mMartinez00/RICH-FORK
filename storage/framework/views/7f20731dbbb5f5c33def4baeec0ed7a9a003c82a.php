<?php $__env->startSection('content'); ?>
	<div class="container spark-screen">
	    <div class="row">
	        <div class="col-md-8">
	            <h1 class="page-header">Contact Us</h1>
	        </div>
	    </div>

	    <div class="row">
	    	<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	    </div>

	    <div class="row">
	    	<div class="col-sm-4 col-md-3">
	    		<div class="travelo-box contact-us-box">
	    			<h4>Our Contact</h4>
	    			<?php echo $__env->make('partials/address', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	    		</div>
	    	</div>

	    	<div class="col-sm-8 col-md-9">

		    	<?php echo Form::open(array('route' => 'contact')); ?>


		    	<h4 class="box-title">Send us a Message</h4>

               	<div class="row form-group">
					<div class="col-xs-6">
						<?php echo Form::label('Your name'); ?>

			    		<?php echo Form::text('name', null, ['required',
			    										'class'=>'form-control',
			    										'placeholder' => 'Your name']); ?>

					</div>
					<div class="col-xs-6">
						<?php echo Form::label('Your email'); ?>

		    			<?php echo Form::text('email', null,
			    						['required',
			    						'class'=>'form-control',
			    						'placeholder' => 'Your email']); ?>

					</div>
		    	</div>

		    	<div class="form-group">
		    		<?php echo Form::label('Your Message'); ?>

		    		<?php echo Form::textarea('msg_body', null, ['required',
		    											'class'=>'form-control',
		    											'placeholder'=>'Your message']); ?>

		    	</div>

		    	<div class="form-group">
					<?php echo Form::submit('Contact Us!', ['class'=>'btn btn-primary']); ?>

		    	</div>

		    	<?php echo Form::close(); ?>

	    	</div>
	    </div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>