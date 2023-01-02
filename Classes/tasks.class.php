<?php
require "dbconnect.php";

class Tasks extends Dbconnect {
    protected function Gettask($id) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("select * from task where TASK_ID=?");
        $stmt->execute([$id]);
        return $stmt;}

    protected function Creattask($text,$state,$lid) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("insert into task(`TASK_TEXT`, `TASK_STATE`, `TASK_LIST_ID`) values(?,?,?)");
        return $stmt->execute([$text,$state,$lid]);}

    protected function Settask($s,$id) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("update `task` set `TASK_STATE` = ? WHERE `TASK_ID` = ?");
        return $stmt->execute([$s,$id]);}
    
    protected function Delettask($id) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("delete from `task` where `TASK_ID` = ?");
        return $stmt->execute([$id]);}

    
}