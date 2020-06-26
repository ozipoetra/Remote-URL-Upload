<?php
$url = "https://wordpress.org/latest.zip";
$data = file_get_contents($url);
$new = 'dir/latest.zip';
//make sure your target directory is writable (777)
file_put_contents($new, $data);
 print("OK");
 ?>
