<?php

function get_release() {
  return [
    '1' => [
      'artist_name' => 'Jyotish',
      'cover_jpg' => 'img/covers/released_dancing_mavka.jpg',
      'cover_webp' => 'img/covers/released_dancing_mavka.webp',
      'relese_title' => 'Various - Dancing Mavka',
      'release_title_url' => 'https://www.discogs.com/Various-Dancing-Mavka/master/350184',
      'track_url' => 'audio/jyotish_1000_little_indians.mp3',
      'track_name' => '1000 little Indianse',
      'label' => 'Lookinglook records',
      'style' => 'Goatrance',
      'year' => '2011',
    ],

    '2' => [
      'artist_name' => 'Jyotish',
      'cover_jpg' => 'img/covers/released_gamayun_tale.jpg',
      'cover_webp' => 'img/covers/released_gamayun_tale.webp',
      'relese_title' => 'Various - Gamayun Tale',
      'release_title_url' => 'https://www.discogs.com/Various-Gamayun-Tale/master/663801',
      'track_url' => 'audio/jyotish_purple_imagination.mp3',
      'track_name' => 'Purple Imagination',
      'label' => 'Lookinglook records',
      'style' => 'Goatrance',
      'year' => '2013',
    ],

    '3' => [
      'artist_name' => 'S.i.O.D',
      'cover_jpg' => 'img/covers/released_spiritual_doping.jpg',
      'cover_webp' => 'img/covers/released_spiritual_doping.webp',
      'relese_title' => 'Various - Spiritual Doping',
      'release_title_url' => 'https://www.discogs.com/Sky-Technology-Spiritual-Doping/master/575416',
      'track_url' => 'audio/siod_the_truth_is_out_there.mp3',
      'track_name' => 'The Truth Is Out There',
      'label' => 'Neogoa',
      'style' => 'Goatrance',
      'year' => '2018',
    ],

    '4' => [
      'artist_name' => 'S.i.O.D',
      'cover_jpg' => 'img/covers/released_goa_meditation_vol3.jpg',
      'cover_webp' => 'img/covers/released_goa_meditation_vol3.webp',
      'relese_title' => 'Various - Goa Meditation vol. 3',
      'release_title_url' => 'https://www.discogs.com/Sky-Technology-Goa-Meditation-vol-3/release/16929132',
      'track_url' => 'audio/siod_storm.mp3',
      'track_name' => 'Storm',
      'label' => 'Timewarp records',
      'style' => 'Goatrance',
      'year' => '2020',
    ],

    '5' => [
      'artist_name' => 'Shankey',
      'cover_jpg' => 'img/covers/released_goa_meditation_vol2.jpg',
      'cover_webp' => 'img/covers/released_goa_meditation_vol2.webp',
      'relese_title' => 'Various - Goa Meditation vol. 2',
      'release_title_url' => 'https://www.discogs.com/ru/Sky-Technology-Goa-Meditation-Vol-2/release/11973596',
      'track_url' => 'audio/shankey_infinity_in_infinity.mp3',
      'track_name' => 'Infinity in Infinity',
      'label' => 'Timewarp records',
      'style' => 'Goatrance',
      'year' => '2018',
    ]
  ];
}


function get_release_attribute($id, $attr) {
  $products = get_release();
  $result = $products[$id][$attr] ?? null;
  return $result;
}

