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
		for ($i = 0; $i < 3; $i++) {
			$array["pics"][$i] = array();
			$array["pics"][$i]["urls"] = array();
			$array["pics"][$i]["urls"]["thumb"] = array();
			$array["pics"][$i]["urls"]["thumb"]["url"] = "https://raw.githubusercontent.com/MOROway/moroway-app-server-samples/main/sample_media/" . $i . ".jpg"; //image source
			$array["pics"][$i]["links"] = array();
			$array["pics"][$i]["links"]["normal"] = "https://github.com/MOROway/moroway-app-server-samples/tree/main/sample_media/" . $i . ".jpg"; //image link
		}
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
