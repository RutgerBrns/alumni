<?php

if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == 2){


	$users = User_Model::getUsers();

	$title = new view('admin/title');
	$page_layout = new view('admin/page_layout');
	$page_layout->title = $title;
	$title->users = $users;

	// set thte title of the page
	presenter::setTitle('Admin Dashboard');

	// give the layout to the presenter to present
	presenter::present($page_layout);

} else {
	header('Location: http://www.alumni.local'); 
}