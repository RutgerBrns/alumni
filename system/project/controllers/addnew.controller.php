<?php

if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == 2){

	$addnew_success = false;

	if(isset($_POST['new_username'])) {		

		if(isset($_POST['new_username'])) { 
			$new_username = request::post('new_username', ''); 
		} 

		if(isset($_POST['new_password'])) { 
		$new_password = request::post('new_password', '');
		} 

		if(isset($_POST['new_firstname'])) { 
		$new_firstname = request::post('new_firstname', '');
		} 

		if(isset($_POST['new_lastname'])) { 
		$new_lastname = request::post('new_lastname', '');
		} 

		if(isset($_POST['new_currentcity'])) { 
		$new_city = request::post('new_currentcity', '');
		} else {
			$new_city = NULL;
		}

		if(isset($_POST['new_origincountry'])) { 
		$new_origincountry = request::post('new_origincountry', '');
		} 
		
		if(isset($_POST['new_currentcountry'])) { 
		$new_currentcountry = request::post('new_currentcountry', '');
		} 

		if(isset($_POST['new_email'])) { 
		$new_email = request::post('new_email', '');
		} 

		if(isset($_POST['new_phone'])) { 
		$new_phone = request::post('new_phone', '');
		} else {
			$new_phone = NULL;
		}

		if(isset($_POST['new_birthday'])) { 
		$new_birthday = request::post('new_birthday', '');
		} else {
			$new_birthday = NULL;
		}

		if(isset($_POST['new_linkedin'])) { 
		$new_linkedin = request::post('new_linkedin', '');
		} else {
			$new_linkedin = NULL;
		}

		if(isset($_POST['new_facebook'])) { 
		$new_facebook = request::post('new_facebook', '');
		} else {
			$new_facebook = NULL;
		}

		if(isset($_POST['new_github'])) { 
		$new_github = request::post('new_github', '');
		} else {
			$new_github = NULL;
		}

		User_Model::createUserFull($new_username, $new_password, $new_email, $new_firstname, $new_lastname, $new_phone, $new_city, $new_birthday, $new_currentcountry, $new_origincountry, $new_linkedin, $new_facebook, $new_github);

		$addnew_success = true;	

	}

	$title = new view('addnew/title');
	$page_layout = new view('addnew/page_layout');
	$page_layout->title = $title;	

	// set thte title of the page
	presenter::setTitle('Add new user');

	// give the layout to the presenter to present
	presenter::present($page_layout);

} else {
	header('Location: http://www.alumni.local'); 
}