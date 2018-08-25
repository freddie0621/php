<?php
$files = scandir('./upload');
//sort($files); // this does the sorting

usort($files, function($a, $b) {
    return filemtime($a) < filemtime($b);
});


usort($files); // this does the sorting
?>
