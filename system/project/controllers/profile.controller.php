<?php

$username = $_SESSION['username'];
$user = User_Model::getUserByUsername($username);

$new_username = request::post('new_username', '');
$new_password = request::post('new_password', '');
$new_firstname = request::post('new_firstname', '');
$new_lastname = request::post('new_lastname', '');
$new_city = request::post('new_city', '');
$new_origincountry = request::post('country_origin', '');
$new_currentcountry = request::post('current_country', '');
$new_currentcity = request::post('current_city', '');
$new_currentcountry = request::post('phone', '');
$new_birthday = request::post('birthday', '');

if ($_POST){	
}

$title = new view('profile/title');
$title->user = $user;

$page_layout = new view('profile/page_layout');
$page_layout->title = $title;

$page_layout->user = $user;

// set thte title of the page
presenter::setTitle('Profile Page');

// give the layout to the presenter to present
presenter::present($page_layout);