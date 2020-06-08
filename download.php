<?php 
$files = scandir('data/output/', SCANDIR_SORT_DESCENDING);
$newest_file = $files[0];
echo 'data/output/'.$newest_file;
?>