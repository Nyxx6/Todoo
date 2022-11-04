<?php
class Userverif extends Users {
    public $errors = [];
    public $data = [];
    private static $tags = ['email','username','password','conf-password','submit'];

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
            $this->Validuname();
            $this->Validmail();
            $this->Validpwd();
        }
        if(empty($this->error) && !$this->Signup()) {
            $this->errors['empty'] = "Error while appending ur account";}
        return $this->errors;  }

    private function Validpwd() {
        $rgx="/^[A-Za-z0-9_]{6,8}$/";
        $this->data['password'] = trim(str_replace(' ','',$this->data['password']));
        $this->data['conf-password'] = trim(str_replace(' ','',$this->data['conf-password']));
        if(strcmp($this->data['password'],$this->data['conf-password'])) {
            $this->errors['password'] = "Passwords are not the same.";   }
        elseif(!preg_match($rgx, $this->data['password'])) {
            $this->errors['password'] = "Password not valid, must be 6-8 characters long (alphanumeric and at least 1 upper case).";
        }                       }

    private function Validmail() {
        $this->data['username'] = trim(str_replace(' ','',$this->data['username']));
        if(!filter_var($this->data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Enter a valid e-mail.";
        }                        }
    
    private function Validuname() {
        $this->data['username'] = trim(str_replace(' ','',$this->data['username']));
        $rgx="/^[A-Za-z][A-Za-z0-9_]{2,14}$/";        
        if(empty($this->data['username'])) {
            $this->errors['username'] = "Username must not be empty.";}
        elseif(!preg_match($rgx, $this->data['username'])) {
            $this->errors['username'] = "Username must start with letter, contains at least 3 characters (number,alphabet or underscore).";} 
        elseif ($this->Exist($username,$email)) {
            $this->errors['username'] = "Username already in use.";
        }
    }

    private function Signup() {
        $pwd = password_hash($this-data['username'],PASSWORD_DEFAULT);
        return $this->Creatuser($this-data['username'].",".$this-data['email'].",".$pwd);
    }

}