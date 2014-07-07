<?php
define('KNRCOMIX_BASETITLE', 'KNReddy Comics');

if ($_SERVER['HTTP_HOST'] != 'localhost')
  define('KNRCOMIX_BASEURL', 'http://comics.knreddy.com/');
else
  define('KNRCOMIX_BASEURL', 'http://localhost/nitin-comics/');
?>
