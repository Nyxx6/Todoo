<?php
require "dbconnect.php";

class Lists extends Dbconnect {
    protected function Getlist($title) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("select * from list where LIST_TITLE=?");
        $stmt->execute([$title]);
        return $stmt;}

    protected function Creatlist($title,$desc,$color,$priv,$cat,$uid) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("insert into list(`LIST_TITLE`, `LIST_DESC`, `LIST_COLOR`, `LIST_PRIV`, `LIST_CAT_ID`, `LIST_USER_ID`) values(?,?,?,?,?,?)");
        return $stmt->execute([$title,$desc,$color,$priv,$cat,$uid]);}

    /*protected function Setlist($id) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("update `list` set `list_NAME` = ?, `list_BD` = ?, `list_TYPE` = ? WHERE `list_ID` = ?");
        return $stmt->execute([$listname,$bd,$type,$id]);}*/
    
    protected function Deletlist($id) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("delete from `list` where `LIST_ID` = ?");
        return $stmt->execute([$id]);}

    
}