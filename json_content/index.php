<?php
// MOROway App Server Sample "JSON Content"
header("Content-type:application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

$array = array();
$key = isset($_GET["key"]) ? $_GET["key"] : "";

switch ($key) {

	case "about":
		$array = ["this", "is", "about", "us"];
		break;

	case "privacy":
		$array = ["we", "love", "privacy"];
		break;

	case "imprint":
		$array = ["we", "are", "here"];
		break;

	case "webpics":
		$array["pics"] = array(); //or null for none
		$array["pics"][0] = array();
		$array["pics"][0]["urls"] = array();
		$array["pics"][0]["urls"]["thumb"] = array();
		$array["pics"][0]["urls"]["thumb"]["url"] = "https://herrmann-engel.de/projekte/moroway/data/pics/thumb/P1090351.JPG"; //image source
		$array["pics"][0]["links"] = array();
		$array["pics"][0]["links"]["normal"] = "https://herrmann-engel.de/projekte/moroway/fotos/5/P1090351.JPG"; //image link
		break;

	case "news-msg":
		$array["id"] = 1;
		$array["title"] = "some awesome title";
		$array["text"] = "some awesome text";
		$array["link"] = null; //or "redirect to" link key
		$array["backgroundImage"] = true; //references ../data/server-note/img/[id]-background-image.png
		$array["image"] = true; //references ../data/server-note/img/[id]-image.png
		$array["imageLink"] = null; //or "redirect to" link key
		$array["validUntil"] = time() * 2; //unix timestamp
		break;

	default:
		$array["error"] = "No valid key specified";
		break;
}

$json = json_encode($array, JSON_PRETTY_PRINT);
print_r($json);
