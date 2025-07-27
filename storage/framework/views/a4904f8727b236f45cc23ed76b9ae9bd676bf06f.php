<?php $__env->startSection('content'); ?>
	<div class="container spark-screen">
	    <div class="row">
	        <div class="col-md-8">
	            <h1 class="page-header">Board of Directors</h1>
	        </div>
	    </div>

	    <div class="row">
	    	<div class="col-sm-8 col-md-9">
	    		<table class="table table-striped">
	    			<thead>
						<tr>
							<th>Board Member</th>
							<th>Professional Affiliation</th>
						</tr>
	    			</thead>
	    			<tbody>
	    				<tr>
	    					<td>Bill McCreary, Chairman</td>
	    					<td>Emmy-Award Winning Journalist/Media</td>
	    				</tr>
	    				<tr>
	    					<td>Rev. Alphonzo Greene, Co-Chairman</td>
	    					<td>Minister, Real Estate Broker/Instructor, Social Activist</td>
	    				</tr>
	    				<tr>
	    					<td>Jeremiah C. Gaffney, Ph.D., Vice Chair</td>
	    					<td>Business Owner</td>
	    				</tr>

						<tr>
	    					<td>Charles Atiles, Board Director</td>
	    					<td>Atiles Associates, LLC</td>
	    				</tr>

	    				<tr>
	    					<td>Amber D. Hampton, Secretary</td>
	    					<td>Google Inc. – Researcher</td>
	    				</tr>
	    				<tr>
	    					<td>David Cockfield, Treasurer</td>
	    					<td>Pastor</td>
	    				</tr>
	    				<tr>
	    					<td>Calena T. Jamieson</td>
	    					<td>Community Engagement Strategist, Marketing Specialist</td>
	    				</tr>
	    			</tbody>
	    		</table>
	    	</div>

	    	<div class="col-sm-4 col-md-3">
	    	</div>
	    </div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>