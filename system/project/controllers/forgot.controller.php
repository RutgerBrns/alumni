<?php

$title = new view('forgot/title');

$page_layout = new view('forgot/page_layout');
$page_layout->title = $title;

// set thte title of the page
presenter::setTitle('Forgot Password Page');

// give the layout to the presenter to present
presenter::present($page_layout);

?>