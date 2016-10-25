<?php
error_reporting(E_ALL);
include_once dirname(__FILE__) . "/../src/Mypage.php";
$show_list = [
	["name" => "Jan1", "age" => 30, "gender" => 1],
	["name" => "Jan2", "age" => 40, "gender" => 0],
	["name" => "Jan3", "age" => 20, "gender" => 1],
	["name" => "Jan4", "age" => 29, "gender" => 1],
	["name" => "Jan5", "age" => 22, "gender" => 0],
	["name" => "Jan6", "age" => 27, "gender" => 1],
	["name" => "Jan7", "age" => 20, "gender" => 1],
];
var_dump($show_list);
echo "<hr>";
$total_num = count($show_list);
$page = new \boss420\Mypage\Mypage($total_num, 2);
echo $page->show();
echo "--";