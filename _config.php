<?php
switch ($_SERVER["SCRIPT_NAME"]) {
	case "/alchemy.php":
		$CURRENT_PAGE = "Alchemy";
		$PAGE_TITLE = "Alchemy Shop";
		break;
	case "/blacksmith.php":
		$CURRENT_PAGE = "Blacksmith";
		$PAGE_TITLE = "Blacksmith";
		break;
	case "/general.php":
		$CURRENT_PAGE = "General";
		$PAGE_TITLE = "General";
		break;
	case "/magic.php":
		$CURRENT_PAGE = "Magic";
		$PAGE_TITLE = "Magic";
		break;
	case "/stable.php":
		$CURRENT_PAGE = "Stable";
		$PAGE_TITLE = "Stable";
		break;
	case "/tavern.php":
		$CURRENT_PAGE = "Tavern";
		$PAGE_TITLE = "Tavern";
		break;
	case "/contact.php":
		$CURRENT_PAGE = "Contact";
		$PAGE_TITLE = "Contact Us";
		break;
	default:
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Fantastical Name Generator";
}

$servername = "localhost";
$username = "fantasti_therealkraus";
$password = "Popravise25!";
$dbname = "fantasti_db";