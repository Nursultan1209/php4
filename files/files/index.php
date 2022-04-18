<!DOCTYPE html>
<html>

<head>
  <title><?php echo $title ?>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php
  $title = 'Сайт нашей школы';
  $header = "Welcome, Гость!";
  $id = strtolower(strip_tags(trim(isset($_GET['id']))));
  switch ($id) {
    case 'about':
      $title = 'О сайте';
      $header = 'О нашем сайте';
      break;
    case 'contact':
      $title = 'Контакты';
      $header = 'Обратная связь';
      break;
    case 'table':
      $title = 'Таблица умножения';
      $header = 'Таблица умножения';
      break;
    case 'calc':
      $title = 'Он-лайн калькулятор';
      $header = 'Калькулятор';
      break;
  }
  ?>
  <style>
    ul.hr li {
      display: inline;
      margin-right: 5px;
      padding: 3px;
    }
  </style>
  <div id="header">
    <!-- Верхняя часть страницы -->
    <?php
    include 'inc/top.inc.php';
    ?>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?php echo $header ?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
    switch ($id) {
      case 'about':
        include 'about.php';
        break;
      case 'contact':
        include 'contact.php';
        break;
      case 'table':
        include 'table.php';
        break;
      case 'calc':
        include 'calc.php';
        break;
      default:
        include 'inc/index.inc.php';
    }
    ?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <!-- Меню -->
    <?php
    include 'inc/menu.inc.php';

    include 'inc/lib.inc.php';
    include 'inc/data.inc.php';
    ?>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <?php
    include 'inc/bottom.inc.php';
    ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>