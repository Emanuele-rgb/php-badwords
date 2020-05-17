<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOREM BOYS</title>
  </head>
  <body>

  <?php   $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $badword = $_GET['name'];
  $replaced = str_replace($badword,'***', $lorem);
  $length = strlen($lorem);
  echo $badword;
  ?>

  <header>
    <p> <?php echo $lorem  ?></p>
    <p> <?php echo $length ?></p>
    <p> <?php echo $replaced ?></p>
  </header>



  </body>
</html>
