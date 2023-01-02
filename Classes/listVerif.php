<?php
require "lists.class.php";
class Listverif extends Lists {
    public $errors = [];
    private $data = [];
    private static $tags = ['title','color','limit-date','category'];
    private static $collab = ['collabs'];

    public function __construct($data) {
        $this->data = $data;
    }

    private function Emptyfield($field) {
        return !(isset($this->data[$field]) && !empty($this->data[$field]));
    }
    private function Empty() {
        foreach(self::$tags as $tag) {
            if($this->Emptyfield($tag)){
                $this->errors['empty'] = $tag." is not set, please fill all *fields.";
                return true;
            }
            
        }
        return false;
    }

    public function Validate() {
        if(!$this->Empty()) {
            $this->Validtitle();
            $this->Validpriv();
            $this->Validcolor();
            $this->Validcateg();
            $this->ValidDate();    
            $this->ValidDesc();    }
        if(empty($this->error) && !$this->newList()) {
            $this->errors['empty'] = "Error while appending list";} 
        return $this->errors;
    }
    
    private function Validtitle() {
        $un = trim($this->data['title']);
        if(empty($un)) {
            $this->errors['title'] = "Title must not be empty!";
        }
    }

    private function Validpriv() {
        if($this->data['privacy']) $this->data['privacy'] = 1;
        else $this->data['privacy'] = 0;
    }

    private function ValidDesc() {
        if(!isset($this->data['description'])) $this->errors['description'] = "Description is empty";
    }

    private function ValidDate() {
        $arr=['January','February','March','April','May','June','July','August','September','October','November','December'];
        $str=explode(" ",$this->data['limit-date']);
        $this->data['limit-date'] = $str[2]."-".(array_search($str[1], $arr)+1)."-".$str[0];
    }

    private function Validcolor() {        
        $str = explode("#",$this->data['color']);$this->data['color'] = $str[1];
        $this->data['color'] = trim(str_replace(' ','',$this->data['color']));
    }
    //AJAX CATEGS
    private function Validcateg() {
        $c = "";
        foreach($this->data['category'] as $cat) {
            $c = $cat." ".$c;
        }
        $this->data['category'] = $c;
    }

    private function newList() {
        return $this->Creatlist($this->data['title'],$this->data['description'],$this->data['color'],$this->data['privacy'],$this->data['category'],$this->data['limit-date'],$_SESSION['USER_ID']);
    }

    public function Validtag() {
        if($this->Emptyfield($this->data['tag'])) {
            $categ= new Category();
            $categs=$categ->GetById($this->data['tag']);
        if($categs->rowCount()) {
            $this->errors['tag'] = "Category already exists!"; }
        else $categ->CreatCateg($this->data['tag']);}
        else $this->errors['tag'] = "Category is not set, please fill the field.";
        return $this->errors;
    }
    public function listCateg() {
        $categ= new Category();
        return $categ->GetAll()->fetchAll(PDO::FETCH_ASSOC);  
    }

}