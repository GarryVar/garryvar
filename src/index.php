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
	  'dancing_mavka_webp' => 'img/covers/released_dancing_mavka.webp',

    'gamayun_tale' => 'img/covers/released_gamayun_tale.jpg',
    'gamayun_tale_webp' => 'img/covers/released_gamayun_tale.webp',

    'spiritual_doping' => 'img/covers/released_spiritual_doping.jpg',
    'spiritual_doping_webp' => 'img/covers/released_spiritual_doping.webp',

    'goa_meditation_vol2' => 'img/covers/released_goa_meditation_vol2.jpg',
    'goa_meditation_vol2_webp' => 'img/covers/released_goa_meditation_vol2.webp',

    'goa_meditation_vol3' => 'img/covers/released_goa_meditation_vol3.jpg',
    'goa_meditation_vol3_webp' => 'img/covers/released_goa_meditation_vol3.webp'
  ];


	//Releases links
  $released_title_urls =  [
    'dancing_mavka' => 'https://www.discogs.com/Various-Dancing-Mavka/master/350184',
    'gamayun_tale' => 'https://www.discogs.com/Various-Gamayun-Tale/master/663801',
    'spiritual_doping' => 'https://www.discogs.com/Sky-Technology-Spiritual-Doping/master/575416',
    'goa_meditation_vol2' => 'https://www.discogs.com/ru/Sky-Technology-Goa-Meditation-Vol-2/release/11973596',
    'goa_meditation_vol3' => 'https://www.discogs.com/Sky-Technology-Goa-Meditation-vol-3/release/16929132'
  ];

	require('components/header.php');
	require('components/main.php');
	require('components/footer.php');
