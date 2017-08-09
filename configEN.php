<?php
define("ROOT", dirname(__FILE__) ."/");
define("HTTP", ($_SERVER["HTTP_HOST"] == "192.168.168.96")
   ? ""
   : "http://192.168.168.94/bigteramain/"
);
$url=HTTP;
?>
