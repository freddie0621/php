<?php
// In PHP 5.4 you can pass JSON_UNESCAPED_UNICODE and JSON_UNESCAPED_SLASHES to json_encode:
$input        = array('file' => '/\intro_cropsic – .m4v');
$paramsString = json_encode($input, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
// And that will encode arrays with unicode characters more compatible with JavaScript.
// (e.g. it will produce the same sha1 if you phpjs.utf8_encode paramString in JavaScript )
// On PHP 5.3 and lower, you may want to try
function json_encode_noescape_slashes_unicode ($arr) {
  array_walk_recursive($arr, function (&$item, $key) { 
    if (is_string($item)) {
      $item = mb_encode_numericentity($item, array(0x80, 0xffff, 0, 0xffff), 'UTF-8');
    }
  });
  $str = mb_decode_numericentity(json_encode($arr), array(0x80, 0xffff, 0, 0xffff), 'UTF-8');
  $str = str_replace('\/','/', $str);
  return $str;
}
