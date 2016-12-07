--TEST--
Check for yar headers
--SKIPIF--
<?php 
if (!extension_loaded("yar")) {
    print "skip";
}
?>
--INI--
yar.packager=php
yar.debug=0
--FILE--
<?php 
include "yar.inc";

yar_server_start();

$headers = array(
    "X-Unique-ID: hello world",
    "X-Test-Name: OK"
);
$client = new Yar_Client(YAR_API_ADDRESS);
$client->setOpt(YAR_OPT_HEADERS, $headers);
var_export($client->headers(1234, 3.8));
?>
--EXPECTF--
array (
  0 => 'hello world',
  1 => 'OK',
)
