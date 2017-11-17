<div class="container">
	<div class="row row-centered">
		<div class="col-md-12 title-profile">
			<h1>Edit your profile<span>.</span></h1>
			<p>This is the information we have from you. If there is any changes, please let us know by editing it yourself. After review we will update the information.</p>

			<p><strong>Last time updated: </strong><?php echo $user->last_updated; ?></p>

		</div>
	</div>
</div>

<div class="edit-form">
	<form class="form-group" method="post" action="">
		
		<h4>Account details</h4>

		<input type="hidden" name="user_id" value="<?php echo $user->id ?>">		

		<label for="inputEmail" class="">Email address</label>
        <input name="new_email" type="email" id="inputEmail" class="form-control" placeholder="<?php echo $user->email; ?>">

        <label for="inputUsername" class="">User name</label>
        <input name="new_username" type="text" id="inputEmail" class="form-control" placeholder="<?php echo $user->username;?>">

        <h4>Personal information</h4>

        <label for="inputFirstName" class="">First name</label>
        <input name="new_firstname" type="text" id="inputFirstName" class="form-control" placeholder="<?php echo $user->first_name; ?>">

        <label for="inputUsername" class="">Last name</label>
        <input name="new_lastname" type="text" id="inputEmail" class="form-control" placeholder="<?php echo $user->last_name; ?>">

        <label for="country" class="">Country in which the student lives now (please provide an ID-number from this list).</label>
        <input name="new_origincountry" type="number" id="inputCurrentCountry" class="form-control" placeholder="<?php echo $user->country_current_id ?>"> | Current country: <?php $country_origin = Country_Model::retrieveByID($user->country_current_id); echo $country_origin->name ?>.

        <label for="inputCurrentCity" class="">City in which the student lives now</label>
        <input name="new_currentcity" type="text" id="inputCurrentCity" class="form-control" placeholder="<?php echo $user->current_city; ?>">

        <label for="inputCountryOrigin" class="">Country where the student is originally from (please provide an ID-number from this list).</label>
        <input name="new_currentcountry" type="number" id="inputCountryOrigin" class="form-control" placeholder="$user->country_origin_id"> | Current country: <?php $current_country = Country_Model::retrieveByID($user->country_origin_id); echo $current_country->name ?>

        <label for="inputBirthday" class="">Birthday</label>
        <input name="new_birthday" type="date" id="inputBirthday" class="form-control" placeholder="<?php echo $user->birthday; ?>">

        <label for="inputPhone" class="">Phone number</label>
        <input type="new_phone" id="inputPhone" class="form-control" placeholder="<?php echo $user->phone; ?>">

        <label for="inputLinkedIn" class="">LinkedIn (full LinkedIn URL)</label>
        <input type="new_linkedin" id="inputLinkedIn" class="form-control" placeholder="<?php echo $user->linkedin; ?>">

        <label for="inputFacebook" class="">Facebook (full Facebook URL)</label>
        <input type="new_facebook" id="inputFacebook" class="form-control" placeholder="<?php echo $user->facebook; ?>">

        <label for="inputGithub" class="">Github (full Github URL)</label>
        <input type="new_phone" id="inputGithub" class="form-control" placeholder="<?php echo $user->github; ?>">      

        <label for="inputPassword" class="">User Password</label>
        <input type="new_password" id="inputPassword" class="form-control" placeholder="current password">

        <button class="btn btn-lg btn-warning btn-block button" type="submit">Change details</button>      

	</form>
</div>

<div class="edit-form">
	<form class="form-group" method="post" action="">

        <h4>Password Management</h4>

        <label for="inputPassword" class="">Current password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="current password" required>

        <label for="inputPassword" class="">New password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="new password" required>

        <label for="inputPassword" class="">Confirm new password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="new password" required>

        <button class="btn btn-lg btn-warning btn-block button2" type="submit">Change password</button>
        <div class="forgot"><a href="<?php echo url::to('Forgot'); ?>"> forgot password?</a></div>
		
	</form>
</div>

<style type="text/css">
	
.title-profile {
	text-align: center;
	font-family: 'Pacifico', cursive;
	color: white;
	margin-top: 3%;
	margin-bottom: 1%;
}

.title-profile p {
	font-family: 'Raleway', sans-serif;
	margin-top: 3%;
	max-width: 750px;
	margin-left: auto;
	margin-right: auto;
	font-size: 1rem;
}

.title-profile span {
	color: #D9534F;
}

.title-profile span {
	color: #D9534F;
}

.edit-form {
	max-width: 400px;
	width: 100%;
	margin-left: auto;
	margin-right: auto;	
}

.edit-form label {
	font-family: 'Raleway', sans-serif;
	color: white;
	padding-top: 5px;	
}

.edit-form h4 {
	font-family: 'Pacifico', cursive;
	color: white;
	text-align: center;
	margin-bottom: 2rem;
	padding-top: 2rem;
}

.form-control:focus {
  border-color: #FF0000;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(217,83,79, 0.6);
}

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #D9534F !important;
    border-color: #D9534F !important;
}

.button {
	width: 30%;
	font-size: 1.1rem;
	margin-top: 10px;
}

.button2 {
	width: 30%;
	font-size: 1.1rem;
	margin-top: 10px;
	float: left;
	margin-bottom: 20vh;
}

.forgot a{
	color: white;
	float: right;
	margin-top: 5px;
}

body {
	background-color: #505050;
}

