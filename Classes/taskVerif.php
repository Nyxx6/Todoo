<?php
class Taskverif {
    public $errors = [];
    private $data = [];
    private static $tags = ['Task','Limit-date','List','Priority','State'];

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
            $this->Validtask();
        }
        return $this->errors;
    }
    
    private function Validtask() {
        $un = trim($this->data['Task']);
        if(empty($un)) {
            $this->errors['Task'] = "Task must not be empty!";
        }
    }

}