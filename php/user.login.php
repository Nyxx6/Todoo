<?php
require "Classes/logVerif.php";
// we get user data from the sign up form
    if(isset($_POST) && !empty($_POST) && isset($_POST['submit'])) {
		// create object > pass post data in params > store returned array in variable
        $post = new LogVerif($_POST);
        $err = $post->Validate(); // array of errors 
        
// check the array $err < (errors or none)
        if(empty($err)) {
            session_start();
            $_SESSION = $post->data;
            header("location:dashboard.php?success"); exit;
        }
        $_POST = $post->data; //return uname 
    }
?>
