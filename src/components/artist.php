<section class="artist-page">
  <!--Released tracks-->
  <article class="artist">
    <div class="artist__inner">
      <div class="artist__status">
        <h2>Released tracks</h2>
      </div>

      <div class="artist__content container">
        <ul class="artist__discography">

          <?php foreach($tracks as $track) : ?>
          <li class="project">
            <div class="project__track-list">
              <div class="project__track" data-aos="fade-bottom">
                <div class="project__cover" data-aos="fade-right">
                  <img
                    src="<?= $track['cover_jpg'] ?>"
                    srcset="<?= $track['cover_webp']?>"
                    loding="lazy"
                    alt="cd compilation <?= $track['release_title']?>"
                    data-aos="zoom-in-up">
                </div>

                <div class="project__info">
                  <a class="project__in-title" href=""></a>
                  <div class="project__track-info">
                    <div class="project__sound">
                      <audio class="project__player" controls src="<?=  $track['track_path'] ?>">
                        Your browser does not support the
                        <code>audio</code> element.
                      </audio>
                    </div>
                    <span class="project__track-name"><?= $track['track_name'] ?></span>
                    <div class="project__track-stats">
                      <a class="project__label" href="#"><?= $track['label']?></a>
                      <small class="project__style"><?= $track['style'] ?></small>
                      <small class="project__year"><?= $track['year'] ?></small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <?php endforeach; ?>

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
