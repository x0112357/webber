<?php

$html = file_get_contents("./html/home.html");

$message = "";
$display = "none";
if(isset($_GET['sm'])){
 $message = base64_decode($_GET['sm']);
 $display = "block";
}

$html = str_replace("[SERVER_MESSAGE]", $message, $html);
$html = str_replace("[SERVER_DISPLAY]", $display, $html);

echo $html;