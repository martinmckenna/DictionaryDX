<?php require_once('incl/functions.php');  ?>

<html>

<title>Dictionary | The Front Page!</title>

<div class = "head">
<link rel="stylesheet" href="jquery/jquery-ui.min.css">
<script src="jquery/external/jquery/jquery.js"></script>
<script src="jquery/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Tinos:400,400italic|Crete+Round:400,400italic|Lora:400,400italic|Bitter:400,400italic|Raleway:400,500,600|Fjalla+One|Archivo+Narrow:400,700|Telex' rel='stylesheet' type='text/css'>
<div class = "search">
<div class = "social_icon">
<form action="search.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>
 </div>
</div>
<div class = "logo">
<div class = "logo_container"><a href = "index.php"><img src = "images/logo2.png" alt = "logo" id = "logoimg"/></a>
</div>
</div>
<div class = "wrapper">
<div class = "navbar">
	<ul class = "menu_items">
		<li class = "menu_button"><a class = "menu_link" href = "index.php">Home</a></li>
		<li class = "menu_button"><a class = "menu_link" href = "admin.php">Admin</a></li>
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
<div class = "article">
<h1>Welcome to Dictionary DX!</h1>
<p>This is a browser-based application where the content is entirely submitted by the user!</p>
<p>The main goal of this project is finding success in something so streamlined and matterof-
fact that it is friendly to all users</p>
  </div>
<div class = "aside">
<h1>Recently Added Words:</h1>
	<?php
		$word = recently_added_word();
		$size_word = sizeof($word);
					
		for ($i=0; $i<$size_word; $i++) {
			$date = $word[$i]["timestamp"];
			$date = new DateTime($word[$i]["timestamp"]);
			//echo $date->format('M j Y g:i A');
			echo "<p>" .  $word[$i] ["word"] . " || " . $date->format('F, Y') . "</p>";
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

