<?php

$username = request::post('username', '');
$password = request::post('password', '');

if ($_POST){
	$user = User_Model::getUserByUsername($username);
	if($user->password == $password){	
		$_SESSION['user_id'] = $user->id;
		$_SESSION['username'] = $user->username;
		header('Location: http://www.alumni.local');
	} else {
		echo 'WRONG PASSWORDDDD!!!!!';
	}
}

$title = new view('signin/title');
$form = new view('signin/form');

$page_layout = new view('signin/page_layout');
$page_layout->title = $title;

// set thte title of the page
presenter::setTitle('Signin Page');

// give the layout to the presenter to present
presenter::present($page_layout);