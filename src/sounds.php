<?php
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

$released__tracks_urls = [
  '1000_little_indians' => 'audio/jyotish_1000_little_indians.mp3',
  'purple_imagination' => 'audio/jyotish_purple_imagination.mp3',
  'the_truth_is_out_there' => 'audio/siod_the_truth_is_out_there.mp3',
  'infinity_in_infinity' => 'audio/shankey_infinity_in_infinity.mp3',
  'storm' => 'audio/siod_storm.mp3'
];


//Releases links
$released_title_urls = [
  'dancing_mavka' => 'https://www.discogs.com/Various-Dancing-Mavka/master/350184',
  'gamayun_tale' => 'https://www.discogs.com/Various-Gamayun-Tale/master/663801',
  'spiritual_doping' => 'https://www.discogs.com/Sky-Technology-Spiritual-Doping/master/575416',
  'goa_meditation_vol2' => 'https://www.discogs.com/ru/Sky-Technology-Goa-Meditation-Vol-2/release/11973596',
  'goa_meditation_vol3' => 'https://www.discogs.com/Sky-Technology-Goa-Meditation-vol-3/release/16929132'
];

  $current_page = '';
  $current_page_sound = 'nav__link--current';
  require ('components/header.php');
  require ('components/artist.php');

  $footer_bg = 'footer--sounds';
  require ('components/footer.php');





/*$id = $_GET['release_id'];
$cover_jpg = get_release_attribute($id, 'cover_jpg');
$cover_webp = get_release_attribute($id, 'cover_webp');
$release_title = get_release_attribute($id, 'release_title');
$release_title_url = get_release_attribute($id, 'release_title_url');
$track_url = get_release_attribute($id, 'track_url');
$track_name = get_release_attribute($id, 'track_name');
$label = get_release_attribute($id, 'label');
$style = get_release_attribute($id, 'style');
$year = get_release_attribute($id, 'year');*/
