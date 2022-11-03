<?php 
// Database-Connect "class" 
// "Methods" > connection to database > all the queries we are gonna be calling later on 
// this class doesn't interact with the user
class Dbconnect {
    protected $user, $pwd, $host, $db; //PARAMS
    public $con; //CONNECTION
public function __construct($user = "root", $pwd = "", $host = "localhost", $db = "_todoo_db") {
    $this->connect();}

protected function connect() { // PDO connection 
    try {
        $this->con = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pwd);
        $this->con->setAttribute(PDO::ATTRIBUTE_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);// Set default fetch to ASSOC (result in array)
         if(! $this->con) { 
            echo "Connection to database Failed..";
            return false;}
        return $this->con;
    }
    catch(PDOException $e) {echo "Exception: ".$e->getMessage();}}
// SELECT $col FROM $tab WHERE $cond ORDER BY $ord $by
public function select($col,$tab,$cond="",$ord="",$by="ASC") {  
    try {
        $query = "select ".$col." from ".$tab;
        if(!empty($cond)) $query.=$cond;
        if(!empty($ord)) $query.=" order by ".$ord." ".$by;
        $stmt = $this->con($query);
        return $stmt->execute();
        }
    catch(PDOException $e) {echo "Exception: ".$e->getMessage();}}
// INSERT INTO $tab($col) VALUES ($val)
public function insert($tab,$col,$val) { //insert request
    try {
        $query = "insert into ".$tab."(".$col.") values(".$val.")";
        $stmt = $this->con->prepare($query);
        return $stmt->execute();
        }
    catch(PDOException $e) {echo "Exception: ".$e->getMessage();}}
// UPDATE $tab SET $col WHERE $cond
public function update($col,$tab,$cond) { //update request 
    try {
        $query = "update ".$tab." set ".$col." where ".$cond;
        $stmt = $this->con->prepare($query);
        return $stmt->execute();
        }
    catch(PDOException $e) {echo "Exception: ".$e->getMessage();}}
// DELETE FROM $tab WHERE $cond
public function delete($tab,$cond="") { //delete request
    try {
        $query = "delete from ".$tab." where ".$cond;
        $stmt = $this->con->prepare($query);
        return $stmt->execute();
        }
    catch(PDOException $e) {echo "Exception: ".$e->getMessage();}}
// $stmt
public function statement($stmt) { //any request
    try {     
        $stmt = $this->con->prepare($query);
        return $stmt->execute();
    }
    catch(PDOException $e) {echo "Exception: ".$e->getMessage();}}
}


?>