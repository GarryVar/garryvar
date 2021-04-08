<section class="artist-page">
  <!--Released tracks-->
  <article class="artist">
    <div class="artist__inner">
      <div class="artist__status">
        <h2>Released tracks</h2>
      </div>

      <div class="artist__content container">
        <ul class="artist__discography">
          <!--Jyotish-->
          <li class="project">
            <h3 class="project__title">Jyotish</h3>
            <ol class="project__track-list">
              <li class="project__track">
                <div class="project__cover">
                  <img
                    src="<?=$released_images_urls['dancing_mavka'] ?>"
                    srcset="<?=$released_images_urls['dancing_mavka_webp'] ?>"
                    loding="lazy"
                    alt="cd compilation 'dancing mavka'">
                </div>
                <div class="project__info">
                  <a class="project__in-title" href="<?= $released_title_urls['dancing_mavka']?>">various - dancing mavka</a>
                  <div class="project__track-info">
                    <div class="project__sound">
                      <audio class="project__player" controls src="/media/cc0-audio/t-rex-roar.mp3">
                        Your browser does not support the
                        <code>audio</code> element.
                      </audio>
                    </div>
                    <span class="project__track-name">1000 Little Indians</span>
                    <div class="project__track-stats">
                      <span class="project__style">Goa trance</span>
                      <span class="project__year">2011</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="project__track">
                <div class="project__cover">
                  <img
                    src="<?=$released_images_urls['gamayun_tale'] ?>"
                    srcset="<?=$released_images_urls['gamayun_tale_webp'] ?>"
                    loding="lazy"
                    alt="cd compilation 'gamayun tale'">
                </div>
                <div class="project__info">
                  <a class="project__in-title" href="<?= $released_title_urls['gamayun_tale']?>">various - Gamayun Tale</a>
                  <div class="project__track-info">
                    <div class="project__sound">
                      <audio class="project__player" controls src="/media/cc0-audio/t-rex-roar.mp3">
                        Your browser does not support the
                        <code>audio</code> element.
                      </audio>
                    </div>
                    <span class="project__track-name">Purple Imagination</span>
                    <div class="project__track-stats">
                      <span class="project__style">Goa trance</span>
                      <span class="project__year">2013</span>
                    </div>
                  </div>
                </div>
              </li>
            </ol>
          </li>

          <!--S.i.O.D-->
          <li class="project">
            <h3 class="project__title">S.i.O.D</h3>
            <ol class="project__track-list">
              <li class="project__track">
                <div class="project__cover">
                  <img
                    src="<?=$released_images_urls['spiritual_doping'] ?>"
                    srcset="<?=$released_images_urls['spiritual_doping_webp'] ?>"
                    loding="lazy"
                    alt="cd compilation 'spiritual doping'">
                </div>
                <div class="project__info">
                  <a class="project__in-title" href="<?= $released_title_urls['spiritual_doping']?>">various - spiritual doping</a>
                  <div class="project__track-info">
                    <div class="project__sound">
                      <audio class="project__player" controls src="/media/cc0-audio/t-rex-roar.mp3">
                        Your browser does not support the
                        <code>audio</code> element.
                      </audio>
                    </div>
                    <span class="project__track-name">The Truth Is Out There</span>
                    <div class="project__track-stats">
                      <span class="project__style">Goa trance</span>
                      <span class="project__year">2013</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="project__track">
                <div class="project__cover">
                  <img
                    src="<?= $released_images_urls['goa_meditation_vol3']?>"
                    srcset="<?= $released_images_urls['goa_meditation_vol3_webp']?>"
                    loding="lazy"
                    alt="cd compilation 'Goa Meditation vol3'">
                </div>
                <div class="project__info">
                  <a class="project__in-title" href="<?= $released_title_urls['goa_meditation_vol3']?>">various - Goa Meditation vol.3</a>
                  <div class="project__track-info">
                    <div class="project__sound">
                      <audio class="project__player" controls src="/media/cc0-audio/t-rex-roar.mp3">
                        Your browser does not support the
                        <code>audio</code> element.
                      </audio>
                    </div>
                    <span class="project__track-name">Storm</span>
                    <div class="project__track-stats">
                      <span class="project__style">Goa trance</span>
                      <span class="project__year">2020</span>
                    </div>
                  </div>
                </div>
              </li>
            </ol>
          </li>


          <!--Shankey-->
          <li class="project">
            <h3 class="project__title">Shankey</h3>
            <ol class="project__track-list">
              <li class="project__track">
                <div class="project__cover">
                  <img
                    src="<?=$released_images_urls['goa_meditation_vol2'] ?>"
                    srcset="<?= $released_images_urls['goa_meditation_vol2_webp']?>"
                    loding="lazy"
                    alt="cd compilation 'goa meditation vol2'">
                </div>
                <div class="project__info">
                  <a class="project__in-title" href="<?= $released_title_urls['goa_meditation_vol2']?>">various - Goa Meditation vol.2</a>
                  <div class="project__track-info">
                    <div class="project__sound">
                      <audio class="project__player" controls src="audio/shankey_infinity_in_infinity.mp3">
                        Your browser does not support the
                        <code>audio</code> element.
                      </audio>
                    </div>
                    <span class="project__track-name">Infinity in Infinity</span>

                    <div class="project__track-stats">
                      <span class="project__style">Goa trance</span>
                      <span class="project__year">2018</span>
                    </div>
                  </div>
                </div>
              </li>
            </ol>
          </li>
        </ul>
      </div>
    </div>
  </article>

  <!--Unreleased tracks-->
  <!--<div class="artist__unreleased">
    <h2 class="artist__release-title">Unreleased track</h2>
    <ul class="artist__discography"></ul>
  </div>-->
</section>
