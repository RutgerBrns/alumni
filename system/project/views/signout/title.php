<div class="container">
	<div class="row row-centered">
		<div class="col-md-12 title-logout">
			<h1>See you again, <span><?php echo $_SESSION['username']; ?></span>.</h1>
			<p>You are now being signed off. You will be redirected to the homepage in 5 seconds...</p>	
		</div>
	</div>
</div>

<?php
	$_SESSION = [];
	header( "refresh:5;url=http://www.alumni.local" );
?>


<style type="text/css">
	
.title-logout {
	text-align: center;
	font-family: 'Pacifico', cursive;
	color: white;
	margin-top: 3%;
	margin-bottom: 5%;
}

.title-logout p {
	font-family: 'Raleway', sans-serif;
	margin-top: 3%;
	max-width: 750px;
	margin-left: auto;
	margin-right: auto;
	font-size: 1rem;
}

.title-logout span {
	color: #D9534F;
}

.title-logout span {
	color: #D9534F;
}

body {
	background-color: #505050;
}
