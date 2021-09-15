<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>MOROway App Server Sample "HTML Content"</title>

	</head>

	<body>

<?php
$key = isset($_GET["key"]) ? $_GET["key"] : "";
switch ($key) {
	case "imprint":
		echo "nomen nominatur";
		break;
	case "feedback":
		echo "send feedback to /dev/null";
		break;
	case "privacy":
		echo "privacy is an illusion";
		break;
	default:
		echo "no idea what you want";
}
?>

	</body>

</html>
