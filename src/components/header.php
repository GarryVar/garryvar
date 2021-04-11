<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/index.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<title><?= $title ?></title>
</head>

	<body class="page">
		<header class="header header--sticky">
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
							<a href="home.php" class="nav__link">Home</a>
						</li>

            <li class="nav__item">
              <a class="nav__link" href="<?= $nav_links['sedona'] ?>">Sedona</a>
            </li>

            <li class="nav__item">
              <a class="nav__link" href="sounds.php">Sounds</a>
            </li>
					</ul>
				</nav>
			</div>
		</header>
    <main>

