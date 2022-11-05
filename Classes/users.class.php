<?php
require "dbconnect.php";

class Users extends Dbconnect {
    protected function Getuser($username,$email="") {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("select * from user where USER_NAME=?");
        $stmt->execute([$username]);
        return $stmt;}

    protected function Creatuser($email,$username,$pwd) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("insert into user(`USER_EMAIL`, `USER_NAME`, `USER_PASS`) values(?,?,?)");
        $pwd = password_hash($pwd,PASSWORD_DEFAULT);
        return $stmt->execute([$email,$username,$pwd]);}

    protected function Setuser($id,$username,$bd="",$type) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("update `user` set `USER_NAME` = ?, `USER_BD` = ?, `USER_TYPE` = ? WHERE `USER_ID` = ?");
        return $stmt->execute([$username,$bd,$type,$id]);}
    
    protected function Deletuser($id) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("delete from `user` where `USER_ID` = ?");
        return $stmt->execute([$id]);}

    
}
