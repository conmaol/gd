<?php
session_start();

switch ($_REQUEST["action"]) {
	case "setLang":
		$_SESSION["lang"] = $_GET["lang"] == "en" ? "en" : "gd";
		echo json_encode(array("lang" => $_SESSION["lang"]));
		break;
	default:
		echo json_encode(array("message" => "unrecognised action"));
}