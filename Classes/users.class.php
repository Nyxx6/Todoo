<?php
// this class inherit the Database-Connection class
// create update get and remove users' accounts requests to database 
// this class doen't interact with user
class Users extends Dbconnect {
    protected function Getuser($col,$cond="",$ord="") {
        $users=$this->select($col,"users",$cond,$ord);
        return $users->fetchAll();}

    protected function Creatuser($col,$val) {
        $users=$this->insert("users",$col,$val);
        return $users->fetchAll();}

    protected function Setuser($col,$cond="") {
        $users=$this->update($col,"users",$cond);
        return $users->fetchAll();}
    
    protected function Deletuser($col,$cond="") {
        $users=$this->delete($col,"users",$cond);
        return $users->fetchAll();}
}