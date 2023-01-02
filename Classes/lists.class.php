<?php
require_once "categ.class.php";
class Lists extends Category {
    protected function Getlist($title) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("select * from list where LIST_TITLE=?");
        $stmt->execute([$title]);
        return $stmt;}
     protected function Getuserlist($uid) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("select * from list where LIST_USER_ID=?");
        $stmt->execute([$uid]);
        return $stmt;}

    protected function Creatlist($title,$desc,$color,$priv,$cat,$end,$uid) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("insert into list(`LIST_TITLE`, `LIST_DESC`, `LIST_COLOR`, `LIST_PRIV`, `LIST_CAT`, `LIST_END`, `LIST_USER_ID`) values(?,?,?,?,?,?,?)");
        return $stmt->execute([$title,$desc,$color,$priv,$cat,$end,$uid]);}

    protected function Setlist($title,$desc,$color,$priv,$cat,$end,$uid) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("update `list` set `LIST_TITLE`=?, `LIST_DESC`=?, `LIST_COLOR`=?, `LIST_PRIV`=?, `LIST_CAT`=?, `LIST_END`=? WHERE `LIST_ID` = ?");
        return $stmt->execute([$title,$desc,$color,$priv,$cat,$end,$uid]);}
    
    protected function Deletlist($id) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("delete from `list` where `LIST_ID` = ?");
        return $stmt->execute([$id]);}
}