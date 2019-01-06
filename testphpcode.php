<?php 

$memcache = new Memcache;
$memcache->connect('localhost', 11211) or die ("Could not connect"); 
//Can Use 127.0.0.1 instead "localhost"
$version = $memcache->getVersion();
echo "Server's version: ".$version."<br/>\n";
$tmp_object = new stdClass;
$tmp_object->str_attr = 'test';
$tmp_object->int_attr = 123;
$memcache->set('key', $tmp_object, false, 10) or die ("Failed to save data at the server");
echo "Store data in the cache (data will expire in 10 seconds)<br/>\n";
$get_result = $memcache->get('key');
echo "Data from the cache:<br/>\n";
var_dump($get_result);

$to = "myemail@domaine.com";
    $subject = "Hi!";
    $body = "Hi,\n\nHow are you?";
    if (mail($to, $subject, $body)) {
            echo("<p>Message successfully sent!</p>");
    } else {
            echo("<p>Message delivery failed...</p>");
    }


?> 
