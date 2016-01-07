<?php
class Database{
        var $dbName;
        var $user;
        var $password;
        var $host;
        var $lastID;
        var $dbConn;

        //constructor
        function __construct($db, $u, $p, $h){
                $this->dbName= $db;
                $this->user= $u;
                $this->password= $p;
                $this->host= $h;

                //metadata to get entire table list?
        }

        //any query
        function query($query){
                        $this->dbConn= new mysqli($this->host, $this->user, $this->password, $this->dbName);
                        if($this->dbConn->connect_errno > 0){
                                die('Unable to connect to database [' . $dbh->connect_error . ']');
                        }
                        
                        $result= $this->dbConn->query($query) or die('There was an error running the query [' . $this->dbConn->error . ']');
                        $this->lastID= $this->dbConn->insert_id; //lastID is the last inputted id
                        $this->dbConn->close();

                        return $result;
        }

        function resToArray($res){
                $data= array();
                while($info= mysqli_fetch_assoc($res)){
                        $data[]= $info;
                }

                return $data;
        }

        function get_column($query){

                $res= $this->query($query);

                $data= array();

                while($info= mysqli_fetch_assoc($res)){
                        $key= array_keys($info);
                        $key= $key[0];
                        $data[]= $info[$key];
                }

                return $data;
        }

        function get_row($query){
                $res= $this->query($query);
                $res= $this->resToArray($res);

            return ($res == false) ? $res : $res[0];    
        }

        function get_var($query){
                $res= $this->query($query);

                $info= mysqli_fetch_array($res);

                return $info[0];
        }


        function get_mysql_timestamp(){
                $dt = new DateTime();
				return $dt->format('Y-m-d H:i:s');
        }


        


        function clean () {
	
		// count the arguments list
		$num_args = func_num_args();
	
		// 1st arg is the string
		$d = func_get_arg(0);
	
		// if 2nd exists, get it
		if ($num_args == 2) {
			$s = func_get_arg(1);
		}
	
		// normalize strings
		if (get_magic_quotes_gpc()) {
			$d = stripslashes($d);
		}
	
		// remove harmful code
		if ($s) {
			// hardcore cleaning
			$d = trim(addslashes(htmlentities(strip_tags($d))));
		} else {
			// lighter duty; use mysql_real_escape_string before sending to database
			$d = trim(htmlentities(strip_tags($d)));
		}
		return $d;
	}
	
	function clean_array($info){
                foreach($info as $key => $val){
                        $info["$key"]= $this->clean($val);
                }
                
                return $info;
        }
}


?>
