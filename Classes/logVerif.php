<?php
require "users.class.php";
class Logverif extends Users {
    public $errors = [];
    public $data = [];
    private static $tags = ['username','password','submit'];

// SANITIZE POST DATA
    public function __construct($data) {
        $this->data = $data;}

        private function Emptyfield($field) {
            return !(isset($this->data[$field]) && !empty($this->data[$field]));
        }
    private function Empty() {
        foreach(self::$tags as $tag) {
            if($this->Emptyfield($tag)){
                $this->errors['empty'] = ucfirst($tag)." is not set, please fill all fields.";
                return true;                     
            }
        }
        return false;}

    public function Validate() {
        if(!$this->Empty()) {
            $user = $this->Getuser($this->data['username']);
            if($user->rowCount() < 1) {
                $this->errors['username'] = "Username not found.";
            }
            else {$user = $user->fetch(PDO::FETCH_ASSOC);
                if(!password_verify($this->data['password'],$user['USER_PASS'])) $this->errors['password'] = "Password not correct.";
                elseif(!($this->data['role'] == $user['USER_TYPE'])) {$this->errors['role'] = "Check the correct role.";}
                    else {unset($this->data);$this->data = $user;}
            }
        }
        return $this->errors;  }

    

}