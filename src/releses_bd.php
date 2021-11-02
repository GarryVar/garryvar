<?php
function get_release() {
  return [
    '1' => [
      'project_title' => 'Jyotish',
      'track_name' => '1000 little Indianse',
      'cover_jpg' => 'img/covers/released_dancing_mavka.jpg',
      'cover_webp' => 'img/covers/released_dancing_mavka.webp',
      'release_title' => 'Various - Dancing Mavka',
      'track_path' => 'audio/1000_little_indians.mp3',
      'label' => 'Lookinglook records',
      'style' => 'Goa trance',
      'year' => '2011'
    ],
    '2' => [
      'project_title' => 'Jyotish',
      'cover_jpg' => 'img/covers/released_gamayun_tale.jpg',
      'cover_webp' => 'img/covers/released_gamayun_tale.webp',
      'release_title' => 'Various - Gamayun Tale',
      'track_path' => 'audio/purple_imagination.mp3',
      'track_name' => 'Purple Imagination',
      'label' => 'Lookinglook records',
      'style' => 'Goa trance',
      'year' => '2013',
    ],
    '3' => [
      'project_title' => 'S.i.O.D',
      'cover_jpg' => 'img/covers/released_spiritual_doping.jpg',
      'cover_webp' => 'img/covers/released_spiritual_doping.webp',
      'release_title' => 'Various - Spiritual Doping',
      'track_path' => 'audio/the_truth_is_out_there.mp3',
      'track_name' => 'The Truth Is Out There',
      'label' => 'Neogoa',
      'style' => 'Goa trance',
      'year' => '2018',
    ],
    '4' => [
      'project_title' => 'S.i.O.D',
      'cover_jpg' => 'img/covers/released_goa_meditation_vol3.jpg',
      'cover_webp' => 'img/covers/released_goa_meditation_vol3.webp',
      'release_title' => 'Various - Goa Meditation vol. 3',
      'track_path' => 'audio/storm.mp3',
      'track_name' => 'Storm',
      'label' => 'Timewarp records',
      'style' => 'Goa trance',
      'year' => '2020',
    ],
    '5' => [
      'project_title' => 'Shankey',
      'cover_jpg' => 'img/covers/released_goa_meditation_vol2.jpg',
      'cover_webp' => 'img/covers/released_goa_meditation_vol2.webp',
      'release_title' => 'Various - Goa Meditation vol. 2',
      'release_title_url' => 'https://www.discogs.com/ru/Sky-Technology-Goa-Meditation-Vol-2/release/11973596',
      'track_path' => 'audio/infinity_in_infinity.mp3',
      'track_name' => 'Infinity in Infinity',
      'label' => 'Timewarp records',
      'style' => 'Goa trance',
      'year' => '2018',
    ]
  ];
}

function get_release_attribute($id, $attr) {
  $products = get_release();
  $result = $products[$id][$attr] ?? null;
  return $result;
}
