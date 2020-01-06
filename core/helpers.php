<?php

function view($name, $data = []) {
  extract($data);

  return require_once "app/views/{$name}.view.php";
}

function redirect($path) {
  header("Location: {$path}");
}

function removeLink($text) {
  return preg_replace(
    '#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#',
    '', 
    $text
  );
}

function dd($data) {
  echo '<pre>';
    die(var_dump($data));
  echo '</pre>';
}
