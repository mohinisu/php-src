--TEST--
mcrypt_create_iv https://bugs.php.net/bug.php?id=55169
--CREDIT--
Ryan Biesemeyer <ryan@yaauie.com>
--SKIPIF--
<?php if (!extension_loaded("mcrypt")) print "skip"; ?>
--FILE--
<?php
for( $i=1; $i<=64; $i = $i*2 ){
  echo 'Input: '. $i . PHP_EOL;
  $random = mcrypt_create_iv( $i, MCRYPT_DEV_URANDOM );
  echo ' Length: ' . strlen( $random ) . PHP_EOL;
  echo ' Hex: '. bin2hex( $random ) . PHP_EOL;
  echo PHP_EOL;
}
?>
--EXPECTF--
Input: 1

Deprecated: Function mcrypt_create_iv() is deprecated in %s%ebug55169.php on line 4
 Length: 1
 Hex: %x

Input: 2

Deprecated: Function mcrypt_create_iv() is deprecated in %s%ebug55169.php on line 4
 Length: 2
 Hex: %x

Input: 4

Deprecated: Function mcrypt_create_iv() is deprecated in %s%ebug55169.php on line 4
 Length: 4
 Hex: %x

Input: 8

Deprecated: Function mcrypt_create_iv() is deprecated in %s%ebug55169.php on line 4
 Length: 8
 Hex: %x

Input: 16

Deprecated: Function mcrypt_create_iv() is deprecated in %s%ebug55169.php on line 4
 Length: 16
 Hex: %x

Input: 32

Deprecated: Function mcrypt_create_iv() is deprecated in %s%ebug55169.php on line 4
 Length: 32
 Hex: %x

Input: 64

Deprecated: Function mcrypt_create_iv() is deprecated in %s%ebug55169.php on line 4
 Length: 64
 Hex: %x
