<?php

// get revisioned JS or CSS bundle for production
function bundle_rev_file($type) {
  $file = false;

  if ($type == 'js') {
    $rev = file_get_contents(get_template_directory() . '/assets/js/rev-manifest.json');
    if($rev == true){
      $file = json_decode($rev);
      $file = $file->{'bundle.js'};
    }

  }

  if ($type == 'css') {
    $rev = file_get_contents(get_template_directory() . '/assets/css/rev-manifest.json');
    if($rev == true){
      $file = json_decode($rev);
      $file = $file->{'styles.css'};
    }
  }


  return $file;
}