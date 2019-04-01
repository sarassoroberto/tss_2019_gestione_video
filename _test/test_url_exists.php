<?php
$url = "http://localhost:8000/framework%20javascript/03-ajax-autocomplete/_test/fraseepica.txt";


/**
 * Undocumented function
 *
 * @param [type] $url
 * @return void
 */
echo "metodo 3<br>";
var_dump(curl_init($url));
var_dump(var_dump(curl_init($url)));

echo  "<br>";
/**
 * metodo 2
 */
function url_exists($url)
{
    if (!$fp = curl_init($url)) return false;
    return true;
}

echo 'metodo 2<br>';
var_dump(boolval(url_exists($url))) . "<br>";


/**
 * metodo 1 
 * @see https://www.xpertdeveloper.com/check-url-existence-with-php/
 */
echo "metodo 1<br>";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_NOBODY, true);
$result = curl_exec($curl);
if ($result !== false) {
    $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if ($statusCode == 404) {
        echo "URL Not Exists";
    } else {
        echo "URL Exists";
    }
} else {
    echo "URL not Exists";
}
