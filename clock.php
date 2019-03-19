<!DOCTYPE html>
<html>
<head>

<meta http-equiv="refresh" content="0.9">
    <title>TIME</title>
    <link rel="stylesheet" href="clock.css">
</head>
	<body>
		<?php include 'nav.php';?>

		<div class="background">
		<?php
			date_default_timezone_set("Europe/Amsterdam");
			$hour = date("H");
        	$minute = date("i");
        	$seconds = date('s');
			

			if ($hour >= "6" && $hour < "12"){
				echo '<h1>' ,"good morning" ,'</h1>';
				echo '<body class="morning">';
			}

			elseif ($hour >= "12" && $hour < "18"){
				echo '<h1>' ,"good afternoon",'</h1>';
				echo '<body class="afternoon">';
			}

			elseif ($hour >= "18" && $hour < "00"){
				echo '<h1>' ,"good night",'</h1>';
				echo '<h1>' ,"good evening";
				echo '<body class="evening">';
			}

			elseif ($hour >= "00" && $hour < "6"){
				echo '<h1>' ,"good night",'</h1>';
				echo '<body class="night">';
			}

			echo '<h1>','The time is ',$hour,":",$minute,":",$seconds,' right now','</h1>';
		?>
		</div>

		<?php include 'footer.php';?>
	</body>
</html>