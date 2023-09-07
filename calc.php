<?php

	$operates = "";
	$screen = "";

	if (isset($_POST["btn"])) {
		$number = $_POST["screen"].$_POST["btn"];
		$screen = $number;
	}

	if (isset($_POST["equal"])) {
		$operates = $_POST["screen"];
		$result = eval("return $operates;");
		$screen = $result;
	}

	if (isset($_POST["clear"])) { $screen = ""; }

?>