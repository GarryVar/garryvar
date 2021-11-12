<?php
  require('releses_db.php');
  $tracks = get_release();

  $title = 'Garryvar | Sounds here you can listning my own tracks';

  $current_page = '';
  $current_page_sound = 'nav__link--current';
  require ('components/header.php');
  require ('components/artist.php');

  $footer_bg = 'footer--sounds';
  require ('components/footer.php');





$id = $_GET['release_id'];
$cover_jpg = get_release_attribute($id, 'cover_jpg');
$cover_webp = get_release_attribute($id, 'cover_webp');
$release_title = get_release_attribute($id, 'release_title');
$release_title_url = get_release_attribute($id, 'release_title_url');
$track_url = get_release_attribute($id, 'track_url');
$track_name = get_release_attribute($id, 'track_name');
$label = get_release_attribute($id, 'label');
$style = get_release_attribute($id, 'style');
$year = get_release_attribute($id, 'year');
