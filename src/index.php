<?php
	$title = 'garryvar.ru';
	$alt = 'logo';


	//Navigation links
	$nav_links = [
	  'home' => 'home.php',
    'sedona' => 'http://garryvar.ru/sedona/',
    'sounds' => 'sounds.php'
  ];

  $header_start_bg = 'header--start';
  $current_page = 'nav__link--current';

	require('components/header.php');
	require ('components/start.php');
	require('components/footer.php');
