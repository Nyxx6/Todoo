<?php 
class Dbconnect {
    protected $user = "root", $pwd = "", $host = "localhost", $db = "_todoo_db"; //PARAMS
    protected $dbh; //CONNECTION
/*public function __construct($user = "root", $pwd = "", $host = "localhost", $db = "_todoo_db") {
    $this->user = $user;$this->pwd = $pwd;$this->host = $host;$this->db = $db;
    $this->connect();}*/

protected function connect() { // PDO connection 
    try {
        $this->dbh = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pwd);
        $this->dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);// Set default fetch to ASSOC (result in array)
         if(!$this->dbh) { 
            echo "Connection to database Failed..";
            }
        return $this->dbh;
    }
    catch(PDOException $e) {echo "Exception: ".$e->getMessage();}}

}


?>