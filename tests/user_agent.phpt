--TEST--
Check for yar user_agent
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

$client = new Yar_Client(YAR_API_ADDRESS);
$client->setOpt(YAR_OPT_USERAGENT, "user/1.0");
var_export($client->useragent(1234, 3.8));
?>
--EXPECTF--
'user/1.0'
