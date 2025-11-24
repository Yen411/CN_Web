<?php 
session_start();
 
if (isset($_POST['username'])) {
    
    $user = isset($_POST['username']) ? trim($_POST['username']) : '';
    $pass = isset($_POST['password']) ? trim($_POST['password']) : ''; 

    if ($user === 'admin' && $pass === '123') { 
         
        $_SESSION['username'] = $user;
         
        header('Location: welcome.php');
        exit; 
         
    } else { 
        header('Location: login.html?error=1');
        exit; 
    } 
} else {
    header('Location: login.html');
    exit;
}
?>