<section class="artist-page">
  <h2 class="visually-hidden">Artist tracks</h2>
  <article class="artist">
    <div class="artist__inner">
      <div class="artist__status">
        <h2>Released tracks</h2>
      </div>

      <div class="artist__content container">
        <ul class="artist__discography">

          <?php foreach($tracks as $track) : ?>
          <li class="project artist__project" data-aos="fade-bottom">
            <div class="project__track-list">
              <div class="project__track">
                <div class="project__cover">
                  <img
                    src="<?= $track['cover_jpg'] ?>"
                    srcset="<?= $track['cover_webp']?>"
                    alt="cd compilation <?= $track['release_title']?>">
                </div>

                <div class="project__info">
                  <div class="project__track-info">
                    <span class="project__name"><?= $track['project_title'] ?></span>
                    <span class="project__track-name"><?= $track['track_name'] ?></span>
                    <div class="project__sound">
                      <audio class="project__player" controls src="<?=  $track['track_path'] ?>">
                        Your browser does not support the
                        <code>audio</code> element.
                      </audio>
                    </div>
                    <div class="project__track-stats">
                      <p class="project__label"><?= $track['label']?></p>
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
</section>
