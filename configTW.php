<?php
define("ROOT", dirname(__FILE__) ."/");
define("HTTP", ($_SERVER["HTTP_HOST"] == "localhost")
   ? ""
   : "http://192.168.168.94/bigteramain/tw/"
);
$url=HTTP;
?>
