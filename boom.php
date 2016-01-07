<?php require_once('incl/functions.php');  ?>
<div>
<?php
		$result= get_words("a");  
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {


		echo "<h3>" . $result[$i]["word"] . "</h3>";
		echo "<div>";
		echo "<p>";
		echo "hook";
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>
