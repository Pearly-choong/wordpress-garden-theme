  
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?> <!-- notice the wordpress admin bar on top-->

  </head>
  <body>

    <header>
      <div class="container">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'top-menu',
          //'menue' => 'top_bar,
          'menu_class' => 'top-bar'
        )
        );
      ?>
      </div>
    </header>