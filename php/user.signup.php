<?php
require "Classes/userVerif.php";
// we get user data from the sign up form
    if(isset($_POST) && !empty($_POST) && isset($_POST['submit'])) {
		// create object > pass post data in params > store returned array in variable
        $post = new UserVerif($_POST);
        $err = $post->Validate(); // array of errors 
        $_POST = $post->data;
// check the array $err < (errors or none)
        if(empty($err)) {
            header("location: index.php?success"); exit;
        }
    }
?>
