<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/index.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<title><?= $title ?></title>
</head>

	<body>
		<header class="header">
			<div class="header__wrapper">
				<a class="header__logo" href="index.php">Garryvar.ru</a>

				<button class="header__toggle toggle" type="button">
          <svg class="toggle__icon" width="32" height="32">
            <use class="toggle__icon--menu" class="" xlink:href="img/sprite.svg#burger"></use>
            <use class="toggle__icon--close hidden" xlink:href="img/sprite.svg#close"></use>
          </svg>
        </button>

				<nav class="nav header__nav">
					<ul class="nav__list">
						<li class="nav__item">
							<a href="<?= $nav_links['home']?>" class="nav__link">Home</a>
						</li>

            <li class="nav__item">
              <a href="<?= $nav_links['sedona'] ?>" class="nav__link">Sedona</a>
            </li>

            <li class="nav__item">
              <a href="<?= $nav_links['sounds'] ?>" class="nav__link nav__link--current">Sounds</a>
            </li>
					</ul>
				</nav>
			</div>
		</header>
