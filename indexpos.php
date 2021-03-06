<?php require_once('incl/functions.php');  ?>


<title>Dictionary | The Front Page!</title>

<div class = "head">
<link rel="stylesheet" href="jquery/jquery-ui.min.css">
<script src="jquery/external/jquery/jquery.js"></script>
<script src="jquery/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Tinos:400,400italic|Crete+Round:400,400italic|Lora:400,400italic|Bitter:400,400italic|Raleway:400,500,600|Fjalla+One|Archivo+Narrow:400,700|Telex' rel='stylesheet' type='text/css'>
<div class = "search">
<div class = "social_icon"><img src="images/search.png" class = "icon" title="search" /></div>
<div class = "social_icon"><input type="search" id="mySearch" placeholder="Search"></div>
</div>
<div class = "logo">
<div class = "logo_container"><a href = "index.php"><img src = "images/logo2.png" alt = "logo" id = "logoimg"/></a></div>
</div>
<div class = "wrapper">
<div class = "navbar">
	<ul class = "menu_items">
		<li class = "menu_button"><a class = "menu_link" href = "index.php">Home</a></li>
		<li class = "menu_button"><a class = "menu_link">Choose A Letter</a>
		<ul class="tab-links">
        <a href="#a"><li class = "letter">A</li></a>
        <a href="#b"><li class = "letter">B</li></a>
		<a href="#c"><li class = "letter">C</li></a>
        <a href="#d"><li class = "letter">D</li></a>
        <a href="#e"><li class = "letter">E</li></a>
        <a href="#f"><li class = "letter">F</li></a>
        <a href="#g"><li class = "letter">G</li></a>
        <a href="#h"><li class = "letter">H</li></a>
        <a href="#i"><li class = "letter">I</li></a>
        <a href="#j"><li class = "letter">J</li></a>
        <a href="#k"><li class = "letter">K</li></a>
        <a href="#l"><li class = "letter">L</li></a>
        <a href="#m"><li class = "letter">M</li></a>
        <a href="#n"><li class = "letter">N</li></a>
        <a href="#o"><li class = "letter">O</li></a>
        <a href="#p"><li class = "letter">P</li></a>
        <a href="#q"><li class = "letter">Q</li></a>
        <a href="#r"><li class = "letter">R</li></a>
        <a href="#s"><li class = "letter">S</li></a>
        <a href="#t"><li class = "letter">T</li></a>
        <a href="#u"><li class = "letter">U</li></a>
        <a href="#v"><li class = "letter">V</li></a>
        <a href="#w"><li class = "letter">W</li></a>
        <a href="#x"><li class = "letter">X</li></a>
        <a href="#y"><li class = "letter">Y</li></a>
        <a href="#z"><li class = "letter">Z</li></a>
    </ul></li>
		<li class = "menu_button"><a class = "menu_link" href = "addword.php">Add A Word</a></li>
		<li class = "menu_button"><a class = "menu_link" href = "indexpos.php">Index</a></li>
		<li class = "menu_button"><a class = "menu_link" href = "report.php">Report</a></li>
	</ul>
</div>

<body>
<div class = "container">
<div class = "pos_container" id = "verb">
<h1>Verbs</h1>
	<?php
		$result= get_wordspos("1");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {

		echo "<ul>";
		echo "<p>" . "<li>" . $result[$i]["word"] . "</li>" . "</p>";
		echo "</ul>";
		}
  ?>
</div>
<div class = "pos_container" id = "noun">
<h1>Nouns</h1>
	<?php
		$result= get_wordspos("2");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {

		
		echo "<ul>";
		echo "<p>" . "<li>" . $result[$i]["word"] . "</li>" . "</p>";
		echo "</ul>";
		}
  ?>
</div>

<div class = "pos_container" id = "pronoun">
<h1>Pronouns</h1>
	<?php
		$result= get_wordspos("3");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {

		
		echo "<ul>";
		echo "<p>" . "<li>" . $result[$i]["word"] . "</li>" . "</p>";
		echo "</ul>";
		}
  ?>
</div>

<div class = "pos_container" id = "adjective">
<h1>Adjectives</h1>
	<?php
		$result= get_wordspos("4");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {

		
		echo "<ul>";
		echo "<p>" . "<li>" . $result[$i]["word"] . "</li>" . "</p>";
		echo "</ul>";
		}
  ?>
</div>

<div class = "pos_container" id = "preposition">
<h1>Prepositions</h1>
	<?php
		$result= get_wordspos("5");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {

		
		echo "<ul>";
		echo "<p>" . "<li>" . $result[$i]["word"] . "</li>" . "</p>";
		echo "</ul>";
		}
  ?>
</div>

<div class = "pos_container" id = "conjunction">
<h1>Conjunctions</h1>
	<?php
		$result= get_wordspos("6");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {

		
		echo "<ul>";
		echo "<p>" . "<li>" . $result[$i]["word"] . "</li>" . "</p>";
		echo "</ul>";
		}
  ?>
</div>

<div class = "pos_container" id = "interjection">
<h1>Interjections</h1>
	<?php
		$result= get_wordspos("7");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {

		
		echo "<ul>";
		echo "<p>" . "<li>" . $result[$i]["word"] . "</li>" . "</p>";
		echo "</ul>";
		}
  ?>
</div>

<div class = "pos_container" id = "adverb">
<h1>Adverbs</h1>
	<?php
		$result= get_wordspos("8");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {

		
		echo "<ul>";
		echo "<p>" . "<li>" . $result[$i]["word"] . "</li>" . "</p>";
		echo "</ul>";
		}
  ?>
</div>

<div class = "pos_container" id = "phrase">
<h1>Phrases</h1>
	<?php
		$result= get_wordspos("9");	
		$size = sizeof($result);
		
		for ($i=0; $i<$size; $i++) {

		
		echo "<ul>";
		echo "<p>" . "<li>" . $result[$i]["word"] . "</li>" . "</p>";
		echo "</ul>";
		}
  ?>
</div>

<?php require_once('incl/tabs.php');  ?>
</div>

<div class = "footer">
Copyright Martin McKenna 2015
</div>
</div>
</body>



</html>

<?php require_once('incl/script.php');  ?>