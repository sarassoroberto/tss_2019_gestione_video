<?php
 //echo php_ini_loaded_file();

var_dump(function_exists('get_headers'));
var_dump(function_exists('curl_init'));

$file = "https://vignette.wikia.nocookie.net/nonciclopedia/images/2/2a/Zeb89_approva.jpg/revision/latest?cb=20180817113840;";
//phpinfo();
echo $file . "<br>";
//$file = "http://127.0.0.1:8000/framework%20javascript/03-ajax-autocomplete/_test/esiste.txt";

//$file = 'http://www.domain.com/somefile.jpg';
$file_headers = get_headers($file);
if (!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
    $exists = false;
} else {
    $exists = true;
}

print_r($file_headers);
