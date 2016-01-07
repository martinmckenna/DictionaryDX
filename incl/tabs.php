<?php require_once('incl/functions.php');  ?>

<div id ="a" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("a");	
		$size = sizeof($result);
		
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);

		
		echo "<h3>" . $result[$i]["word"] . " " . "(" . $pos["pos"] . ")" . "</h3>";
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
<div id ="b" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("b");	
		$size = sizeof($result);
		
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);

		
		echo "<h3>" . $result[$i]["word"] . " " . "(" . $pos["pos"] . ")" . "</h3>";
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
  <div id ="c" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("c");	
		$size = sizeof($result);
		;
		
		for ($i=0; $i<$size; $i++) {
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);

		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="d" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("d");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
			
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);

		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="e" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("e");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);

		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="f" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("f");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="g" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("g");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="h" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("h");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="i" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("i");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="j" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("j");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="k" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("k");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="l" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("l");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="m" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("m");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="n" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("n");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="o" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("o");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="p" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("p");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="q" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("q");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="r" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("r");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="s" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("s");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="t" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("t");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="u" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("u");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="v" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("v");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="w" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("w");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="x" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("x");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="y" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("y");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>
  
    <div id ="z" class = "display">
	<div class="accordion">
	<?php
		$result= get_words("z");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {
		//get row where definiton id = word foreign key
		$def= get_definition($result[$i]["did"]);
		//get corresponding pos to the defintion foreign key
		$pos= print_pos($def["pos"]);
		
		echo "<h3>" . $result[$i]["word"] . " " . "" . "(" . $pos["pos"] . ")" . "</h3>";
		
		
		
		echo "<div>";
		echo "<p>";
		echo $def["def"];
		echo "</p>";
		echo "</div>";
		}
  ?>
  </div>

  </div>