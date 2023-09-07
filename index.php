<!doctype html>

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

<html lang="en">
	<head>
		<title>PHP Calculator</title>
		
		<meta charset="utf-8">
		<meta name="author" content="IDK WIA">
		<meta name="description" content="PHP Calculator">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="calc">
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
				<div class="screen">
					<input type="text" name="screen" value="<?php echo $screen; ?>" readonly>
				</div>
				
				<div class="keyboard">
					<button id="clear" class="btn" name="clear">Clear</button>
					
					<button id="div" class="btn" name="btn" value="/">/</button>
					<button id="mul" class="btn" name="btn" value="*">*</button>
					<button id="minus" class="btn" name="btn" value="-">-</button>
					<button id="plus" class="btn" name="btn" value="+">+</button>
					
					<button id="equal" class="btn" name="equal">=</button>

					<button id="num7" class="btn" name="btn" value="7">7</button>
					<button id="num8" class="btn" name="btn" value="8">8</button>
					<button id="num9" class="btn" name="btn" value="9">9</button>

					<button id="num4" class="btn" name="btn" value="4">4</button>
					<button id="num5" class="btn" name="btn" value="5">5</button>
					<button id="num6" class="btn" name="btn" value="6">6</button>

					<button id="num1" class="btn" name="btn" value="1">1</button>
					<button id="num2" class="btn" name="btn" value="2">2</button>
					<button id="num3" class="btn" name="btn" value="3">3</button>

					<button id="num0" class="btn" name="btn" value="0">0</button>
					<button id="dot" class="btn" name="btn" value=".">.</button>
				</div>
			</form>
		</div>
	</body>
</html>