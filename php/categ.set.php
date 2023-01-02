<?php
require "Classes/listVerif.php";

if(isset($_POST) && isset($_POST['submit1'])) {
$post = new Listverif($_POST);
$err = $post->Validtag();unset($post);
}

if(isset($_POST) && isset($_POST['submit'])) {
    $post = new Listverif($_POST);
    $err = $post->Validate();unset($post);
    }
$categs = new Listverif([]);
$categs = $categs->listCateg();
