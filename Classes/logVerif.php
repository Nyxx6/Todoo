<?php
class Logverif extends Users {
    public $errors = [];
    public $data = [];
    private static $tags = ['username','password','role','submit'];

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
            $user = $this->Getuser("username,password","uname=".$username);
            if($user->rowCount() < 1) {
                $this->errors['username'] = "Username not found.";
            }
            else {$user = $user->fetchAll();
                if(!password_verify($user['password'],$this->data['password'])) $this->errors['password'] = "Password not correct.";
            }
        }
        return $this->errors;  }

    

}