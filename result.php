<?php 
$files = scandir('data', SCANDIR_SORT_DESCENDING);
$newest_file = $files[0];
echo 'data/'.$newest_file;
?>