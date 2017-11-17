<div id="country_data">

	<div class="row">

		<h2 class="pull-left">Alumni originally from <strong><?php echo $country->name; ?></strong></h2>

	</div>

    <?php foreach ($users as $user): ?>

    <div class="row">

    	<div class="col-lg-2 col-md-3 col-xs-12">

    		<div class="user-image">
    			<div class="user-image-item">
    				<img class="img-responsive" src="img/default_women_black.png" alt="avatar">
    			</div>    		
    		</div>

    	</div>

    	<div class="col-lg-8 col-offset-lg-2 col-md-8 col-offset-md-2 col-xs-12 user-data-id">
		    <h2><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></h2>

		    <h4>Currently living in: <?php echo $user->current_city; ?>, <?php $current_country = Country_Model::retrieveByID($user->country_current_id); echo $current_country->name ?></h4>

		    <?php if (!$_SESSION): ?>

		    	<p>You are not logged in. Log in to get in touch with <?php echo $user->first_name; ?> and find out what he is doing right now.</p>

		    	<button type="button" class="btn btn-danger">Log in to contact</button>

		    <?php endif;?>

		    <?php if ($_SESSION): ?>
		    		
			<h4><strong>Phone: 	</strong> <?php echo $user->phone; ?></h4>
			<h4><strong>Mail: 	</strong> <?php echo $user->email; ?></h4>

			<div class="col-lg-2 col-md-2 col-xs-6 user-data-id pull-right">
			    	<a><img class="img-responsive" src="img/facebook.png" alt="linkedin"></a>
			</div>  
			<div class="col-lg-2 col-md-2 col-xs-6 user-data-id pull-right">
			    	<a><img class="img-responsive" src="img/linkedin.png" alt="linkedin"></a>
			</div>  
			<div class="col-lg-2 col-md-2 col-xs-6 user-data-id pull-right">
			    	<a><img class="img-responsive" src="img/github.png" alt="linkedin"></a>
			</div>  

		    <?php endif;?>		    

		</div>

		<hr class="horizontal-line">
		
	</div>

	<?php endforeach;?>

</div>

<style type="text/css">
	
.user-data-id {
	text-align: left;
	margin-bottom: 1rem;
}

.user-image {
	display: flex;
	align-items: center;
	min-height: 100%;  /* Fallback for browsers do NOT support vh unit */ 
	vertical-align: middle;	
}

.user-image-item {
	margin-top: 25px;
}


</style>