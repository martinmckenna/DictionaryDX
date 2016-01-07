<?php

require_once('incl/Database.php');

$host= 'localhost';
$u= 'root';
$p= '';
$d= 'dictionary';

global $db;
$db= new Database($d, $u, $p, $host);

function print_array( $a ) {
?>
  <pre>
  <?php var_dump( $a ); ?>
  </pre>
<?php
}

//gets the recently added words in the database and orders by time
function recently_added_word() {
	$db= $GLOBALS['db'];
	$results = $db ->query("SELECT word, timestamp FROM word ORDER BY timestamp DESC LIMIT 0,5");
	return $db->resToArray($results);

}

/*function search($info){
	$db= $GLOBALS['db'];
	extract($info);
	$query = "SELECT  id, word FROM word WHERE word LIKE '%$info%'";
	while($row=mysql_fetch_array($result)){ 
	          $word  =$row['word']; 
	          $id=$row['id']; 
	  //-display the result of the array 
	  echo "<ul>\n"; 
	  echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$word .  "</a></li>\n"; 	  echo "</ul>"; 
	  } 
}*/

function get_info($table='word'){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM $table");
	return $db->resToArray($results);
}
function get_definfo($table='definition'){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM $table");
	return $db->resToArray($results);
}

//get entire list of parts of speech
function listof_pos($table='pos'){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM $table");
	return $db->resToArray($results);
}

//get entire list of words
function listof_words($table='word'){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM $table");
	return $db->resToArray($results);
}

function listof_wordsdef(){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM word, definition");
	return $db->resToArray($results);
}

//gets all words by letter (letter defined in argument) in alpha order
function get_words($letter){
	$db= $GLOBALS['db'];
	$results = $db ->query("SELECT * FROM word WHERE LOWER( word.word ) LIKE  '$letter%' ORDER BY word");
	return $db->resToArray($results);
}

//gets list of words by p.o.s (pos is defined in the argument by a number)
function get_wordspos($pos){
	$db= $GLOBALS['db'];
	$results = $db ->query("SELECT word.word, definition.pos 
	FROM word
	INNER JOIN definition
	ON word.did=definition.id
	WHERE pos='$pos'
	ORDER BY word");
	return $db->resToArray($results);
}

//gets part of speech for the corresponing definition
function print_pos($pos){
	$db= $GLOBALS['db'];
	$query = "SELECT * FROM pos WHERE id='$pos'";
	return $db->get_row($query);
}

//get definiton for the corresponding word
function get_definition($did){
	$db= $GLOBALS['db'];
	$query = "SELECT * FROM definition WHERE id='$did'";
	return $db->get_row($query);
}

function check_word($name){
	$words= get_info(); //gets all words from database
	
	foreach($words as $wordie){ //checks all words to check for duplicates
		if(strtolower($name) == strtolower($wordie['word'])){
			return true;
		}
	}
	
	return false;
	
}

//adds values to words and definitions tables. 
function add_word($info){
	$db= $GLOBALS['db']; //grab database variable
	extract($info);
	//$cleaned_word = $db->clean($info['word']); //Cleans the input for SQL injections
	$cleaned_word = $db->clean($word, true); //Cleans the input for SQL injections
	$timestamp= $db->get_mysql_timestamp();	
	$db->query("INSERT INTO definition VALUES('', '$def', '$pos')" );
	echo "INSERT INTO word VALUES('', '$cleaned_word', '$db->lastID', '$timestamp')";
	$db->query("INSERT INTO word VALUES('', '$cleaned_word', '$db->lastID', '$timestamp')");

	
}

function delete_word($info) {
	$db= $GLOBALS['db']; //grab database variable
	extract($info);
	$db->query("DELETE FROM word, definition 
				USING word
				INNER JOIN definition ON word.did = definition.id 
				WHERE word.did = '$delete'");
}

function update_word($info) {
	$db= $GLOBALS['db']; //grab database variable
	extract($info);
	//$word = $db->clean_array($word); //Cleans the input for SQL injections
	$timestamp= $db->get_mysql_timestamp();	
	$db->query("UPDATE definition SET def = '$def', pos = '$pos'
				WHERE id = '$edited_word'");
	$db->query("UPDATE word SET word = '$word', timestamp = '$timestamp'
				WHERE did = '$edited_word'");
}

?>