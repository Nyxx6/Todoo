<?php
class Listverif {
    public $errors = [];
    private $data = [];
    private static $tags = ['Title','Color','Limit-date','Privacy'];
    private static $tags2 = ['Description','Collabs'];


    public function __construct($data) {
        $this->data = $data;
    }

        private function Emptyfield($field) {
            return !(isset($this->data[$field]) && !empty($this->data[$field]));
        }
    private function Empty() {
        foreach(self::$tags as $tag) {
            if($this->Emptyfield($tag)){
                $this->errors['empty'] = $tag." is not set, please fill all fields.";
                return true;
            }
            
        }
        return false;
    }

    public function Validate() {
        if(!$this->Empty()) {
            $this->Validtitle();
            $this->Validdescrip();
        }
        return $this->errors;
    }
    
    private function Validtitle() {
        $un = trim($this->data['Title']);
        if(empty($un)) {
            $this->errors['Title'] = "Title must not be empty!";
        }
    }

    private function Validdescrip() {
        // verif text
    }

}