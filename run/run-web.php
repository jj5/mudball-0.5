<?php

require_once __DIR__ . '/../inc/module.php';

if ( function_exists( 'app_render' ) ) {

  // 2024-10-21 jj5 - TODO: think about how app_submit() might work...

  app_render();

}
else {

  app()->run();

}
