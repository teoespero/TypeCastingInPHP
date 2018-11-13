<!-- 

Teodulfo Espero
BS Cloud and Systems Administration
Western Governors University 

-->

<! DOCTYPE html>
<html lang="en">
<html>
	<head>	
			<meta charset="utf-8">
			<title>teoespero.com | Type Casting - PHP Programming</title>
			<meta name="description" content="">
  			<meta name="author" content="teoespero">
	</head>
	<body>
		<?php

			// define constants
			define("_NEWLINE", "<br>");
			define("_SPACER", " ");
			define("_BOLDSTART", "<strong>");
			define("_BOLDEND", "</strong>");
			define("_ITALICSTART", "<em>");
			define("_ITALICEND", "</em>");
			
			// our variable
			echo "<h1>Type Casting</h1>";

			// initially set as 2
			$count = 2;

			echo "count contains:" . _SPACER . $count . _NEWLINE;
			echo "count var:" . _SPACER . strtoupper(gettype($count)) . _NEWLINE . _NEWLINE;

			// set as a string
			$count = "Mestiza";
			echo "count contains:" . _SPACER . $count . _NEWLINE;
			echo "count var:" . _SPACER . strtoupper(gettype($count)) . _NEWLINE . _NEWLINE;		
			
			// convert the string to an integer
			$count = "2 Mestiza";
			echo "count contains:" . _SPACER . $count . _NEWLINE;
			echo "count var:" . _SPACER . strtoupper(gettype($count)) . _NEWLINE . _NEWLINE;		

			echo "count contains:" . _SPACER . $count . _NEWLINE;
			settype($count, "integer");
			echo "count contains:" . _SPACER . $count . _NEWLINE;
			echo "count var:" . _SPACER . strtoupper(gettype($count)) . _NEWLINE . _NEWLINE;			
			
		?>


	</body>
</html>

