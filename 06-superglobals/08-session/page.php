<?php

session_start();
if(isset($_SESSION['name'])){
    echo 'Name: '. $_SESSION['name'];
}else{
    echo 'Name is not set ';
}

