<?php
    $file_dir = 'data/output/';
    $files = scandir($file_dir, SCANDIR_SORT_DESCENDING);
    $file_name = $files[0];
    $data = file($file_dir.$file_name);

    $html_str = '';

    foreach ($data as $line){
        $col = explode(',',$line);
        $html_str = $html_str.'<tr>';
        foreach($col as $element){
            
            $html_str = $html_str.'<td>'.$element.'</td>';
            
        }
        $html_str = $html_str.'</tr>';
    }
    echo $html_str;
?>