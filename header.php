<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The blog of web developer Yiying Zou.">
    <title><?php echo bloginfo('name'); ?> | <?php echo bloginfo('description'); ?></title>
    
    <?php wp_head(); ?>
    <!-- this function lets us add the stylesheets -->

  </head>
  <body>
    <div class="outer-wrapper">
        <header>
          <div class="wrapper">
            <h1><a href="<?php echo site_url(''); ?>" class="heading-link"><?php echo bloginfo('name'); ?></a></h1>
            </div>
        </header>
      </div>
    </div>