--TEST--
Request #50698_1 (SoapClient should handle wsdls with some incompatiable endpoints)
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--INI--
soap.wsdl_cache_enabled=0
--FILE--
<?php
new SoapClient(__DIR__ . '/bug50698_1.wsdl');
echo "ok\n";
?>
--EXPECT--
ok
