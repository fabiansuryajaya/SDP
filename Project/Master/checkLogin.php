<?php
    require_once("../config.php");
    if(isset($_POST['btnLogin'])){
        echo "test";
        if($_POST['username'] == 'admin' && $_POST['pass'] == 'admin'){
            header("location: homepage.php");
        }
        else{
            header("location: index.php");
        }
    }
?>