<?php

if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == 2){

	$edit_success = false;

	if(isset($_POST['new_username'])) {

		$user_id = request::post('user_id', '');
		$user = User_Model::getUserByUserID($user_id);

		if(isset($_POST['new_username'])) { 
			$new_username = request::post('new_username', ''); 
		} else {
			$new_username = $user->username;
		}

		if(isset($_POST['new_password'])) { 
		$new_password = request::post('new_password', '');
		} else {
			$new_password = $user->password;
		}

		if(isset($_POST['new_firstname'])) { 
		$new_firstname = request::post('new_firstname', '');
		} else {
			$new_firstname = $user->first_name;
		}

		if(isset($_POST['new_lastname'])) { 
		$new_lastname = request::post('new_lastname', '');
		} else {
			$new_lastname = $user->last_name;
		}

		if(isset($_POST['new_currentcity'])) { 
		$new_city = request::post('new_currentcity', '');
		} else {
			$new_city = $user->current_city;
		}

		if(isset($_POST['new_origincountry'])) { 
		$new_origincountry = request::post('new_origincountry', '');
		} else {
			$new_origincountry = $user->country_origin_id;
		}			
		
		if(isset($_POST['new_currentcountry'])) { 
		$new_currentcountry = request::post('new_currentcountry', '');
		} else {
			$new_currentcountry = $user->country_current_id;
		}

		if(isset($_POST['new_email'])) { 
		$new_email = request::post('new_email', '');
		} else {
			$new_email = $user->email;
		}			
		
		if(isset($_POST['new_phone'])) { 
		$new_phone = request::post('new_phone', '');
		} else {
			$new_phone = $user->phone;
		}

		if(isset($_POST['new_birthday'])) { 
		$new_birthday = request::post('new_birthday', '');
		} else {
			$new_birthday = $user->birthday;
		}

		if(isset($_POST['new_linkedin'])) { 
		$new_linkedin = request::post('new_linkedin', '');
		} else {
			$new_linkedin = $user->linkedin;
		}

		if(isset($_POST['new_facebook'])) { 
		$new_facebook = request::post('new_facebook', '');
		} else {
			$new_facebook = $user->facebook;
		}

		if(isset($_POST['new_github'])) { 
		$new_github = request::post('new_github', '');
		} else {
			$new_github = $user->github;
		}

		User_Model::deleteUserByID($user_id);
		User_Model::createUserFull($new_username, $new_password, $new_email, $new_firstname, $new_lastname, $new_phone, $new_city, $new_birthday, $new_currentcountry, $new_origincountry, $new_linkedin, $new_facebook, $new_github);

		$edit_success = true;	

	}

	$user_id = request::post('id', '');
	$username = request::post('username', '');

	if(isset($new_username)) { 
		$new_user = User_Model::getUserByUsername($new_username);
	} else if(isset($user_id)) {
		$new_user = User_Model::getUserByUserID($user_id);	
	} else {
		header('Location: http://www.alumni.local'); 
	}

	$title = new view('edit/title');
	$page_layout = new view('edit/page_layout');
	$page_layout->title = $title;
	$title->user = $new_user;
	$title->edit_success = $edit_success;

	// set thte title of the page
	presenter::setTitle('Edit User');

	// give the layout to the presenter to present
	presenter::present($page_layout);

} else {
	header('Location: http://www.alumni.local'); 
}