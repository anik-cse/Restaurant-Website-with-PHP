<?php
session_start();
$errors = [];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['subject'];
    $message = $_POST['message'];

    // Adding validation 
    if(empty($name)){
        $errors['name'] = "You can't leave your name empty.";
    }if(empty($email)){
        $errors['email'] = "You can't leave your email empty.";
    }if(empty($subject)){
        $errors['subject'] = "You can't leave your subject empty.";
    }if(empty($message)){
        $errors['message'] = "You can't leave your message empty.";
    }

    

    if(count($errors) > 0){
        $_SESSION['errors'] = $errors;
        header('Location: http://missonphp.test/Restaurant-website-with-PHP/#contact');
    }
}

?>
