<?php
	$title = 'Hi, I\'m Igor – junior frontend developer from Simferopol. I\'m interesting in web development: html, css, native javascript and other frontend technologies';
	$alt = 'logo';


	//Navigation links
	$nav_links = [
	  'home' => 'home.php',
    'sounds' => 'sounds.php',
  ];

  $current_page = 'nav__link--current';

	require('components/header.php');
	require ('components/start.php');
	require('components/footer.php');
