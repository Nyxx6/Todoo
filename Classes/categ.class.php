<?php
require_once "dbconnect.php";
class Category extends Dbconnect {
    public function __construct(){      
    }
    protected function GetCateg($tag) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("select * from `category` where CAT_TAG=?");
        $stmt->execute([$tag]);
        return $stmt;}
        protected function GetById($id) {
            $dbh = $this->connect();
            $stmt = $dbh->prepare("select CAT_ID from `category` where CAT_ID=?");
            $stmt->execute([$id]);
            return $stmt;}
    protected function GetAll() {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("select * from category");
        $stmt->execute();
        return $stmt;}

    protected function CreatCateg($tag) {
        $dbh = $this->connect();
        $stmt = $dbh->prepare("insert into category(`CAT_TAG`) values(?)");
        return $stmt->execute([$tag]);}
}