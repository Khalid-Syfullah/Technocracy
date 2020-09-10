<?php
  $file = 'files/animation_game_rule.pdf';
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="'.$file."");
  header('Content-Trasfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  @readfile($file);
 ?>
