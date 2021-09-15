<?php
	// MOROway App Server Sample "JSON Content"
	header("Content-type:application/json; charset=UTF-8");
	header("Access-Control-Allow-Origin: *");

	$array = array();
	$key = isset($_GET["key"]) ? $_GET["key"] : "";

	switch ($key) {

		case "privacy":
			$array = ["we", "love", "privacy"];
			break;

		case "imprint":
			$array = ["we", "are", "here"];
			break;

		case "webpics":
			$array = null;
			break;

		case "news-msg":
			$array["id"] = time();
			$array["title"] = "some awesome title";
			$array["text"] = "some awesome text";
			$array["link"] = null; //or "redirect to" link key
			$array["validUntil"] = time() * 2; //unix timestamp
			break;

		default:
			$array["error"] = "No valid key specified";
			break;
	}

	$json = json_encode($array,JSON_PRETTY_PRINT);
	print_r($json);

?>
