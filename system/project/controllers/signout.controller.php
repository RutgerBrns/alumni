<?php 

$title = new view('signout/title');

$page_layout = new view('signout/page_layout');
$page_layout->title = $title;

// set thte title of the page
presenter::setTitle('Signout Page');

// give the layout to the presenter to present
presenter::present($page_layout);