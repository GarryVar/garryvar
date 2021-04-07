<?php
	$title = 'garryvar.ru';
	$alt = 'logo';


	//Navigation links
	$nav_links = [
	  'home' => 'index.php',
    'sedona' => 'http://garryvar.ru/sedona/',
    'sounds' => 'http://garryvar.ru/siod/',
    'Graphics'
  ];


	//Images links
	$released_images_urls = [
	  'dancing_mavka' => 'img/covers/released_dancing_mavka.jpg',
    'gamayun_tale' => 'img/covers/released_gamayun_tale.jpg',
    'spiritual_doping' => 'img/covers/released_spiritual_doping.jpg',
    'goa_meditation_vol3' => 'img/covers/released_goa_meditation_vol3.jpg'
  ];


	//Releases links
  $released_title_urls =  [
    'dancing_mavka' => 'https://www.discogs.com/Various-Dancing-Mavka/master/350184',
    'gamayun_tale' => 'https://www.discogs.com/Various-Gamayun-Tale/master/663801',
    'spiritual_doping' => 'https://www.discogs.com/Sky-Technology-Spiritual-Doping/master/575416',
    'goa_meditation_vol3' => 'https://www.discogs.com/Sky-Technology-Goa-Meditation-vol-3/release/16929132'
  ];

	require('components/header.php');
	require('components/main.php');
	require('components/footer.php');
