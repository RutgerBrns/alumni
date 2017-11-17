<?php

//All the elements that you want to show on the page
$title = new view('home/title');
$counters = new view('home/counters');

$map = new view('home/originalmapfile');

$map->countries = Country_Model::getCurrentCountriesWithUsers();
$country_codes = [];
foreach($map->countries as $country)
{
    $country_codes[] = strtoupper($country->ISO_code);
}
$map->country_codes = $country_codes;

$gps = new view('home/gps');

//Import the page-layout
$page_layout = new view('home/page_layout');
$page_layout->title = $title;
$page_layout->counters = $counters;
$page_layout->map = $map;
$page_layout->gps = $gps;

$page_layout->batches = Batch_Model::getBatches();

// set thte title of the page
presenter::setTitle('Homepage');

// give the layout to the presenter to present
presenter::present($page_layout);