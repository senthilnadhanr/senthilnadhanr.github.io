<?php
/**
 * User: senthil.ramasamy
 * Date: 07-02-2024
 * Time: 03:18 pm
 */

$content = "==================================================================================================\n";
$content .= "Date: ".date("Y-m-d H:i:s")."\n";
$content .= "---------------------------------------------------------------------------------------------------\n";
$content .= "Request: \n".print_r($_REQUEST,true)."\n";
$content .= "Request Json: ". json_encode($_REQUEST)."\n";
$content .= "---------------------------------------------------------------------------------------------------\n";
$content .= "Server: \n".print_r($_SERVER,true)."\n";
$content .= "---------------------------------------------------------------------------------------------------\n";
$content .= "==================================================================================================\n";
$content .= "End\n\n";
$file = fopen("contact.txt", "a");
fwrite($file, $content);
fclose($file);
header('Location: /');
die;