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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="yandex-verification" content="72f6f145e305609d" />
  <meta name="description" content="<?=$title?>">
	<title><?=$title?></title>
</head>
	<body class="page">
		<header class="header header--sticky <?=$header_start_bg?><?=$header_arts_bg?>">
			<div class="header__wrapper">
				<a class="header__logo" href="/">Garryvar.ru</a>

				<button class="header__toggle toggle" type="button">
          <svg class="toggle__icon" width="32" height="32">
            <use class="toggle__icon--menu" xlink:href="img/sprite.svg#burger"></use>
            <use class="toggle__icon--close hidden" xlink:href="img/sprite.svg#close"></use>
          </svg>
        </button>

				<nav class="nav header__nav">
					<ul class="nav__list">
						<li class="nav__item">
							<a href="/" class="nav__link <?=$current_page?>">Home</a>
						</li>

            <li class="nav__item">
              <a class="nav__link <?=$current_page_sound?>" href="sounds.php">Sound Projects</a>
            </li>

          </ul>
				</nav>
			</div>
		</header>
    <main>

