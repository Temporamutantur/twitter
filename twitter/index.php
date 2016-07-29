<?php

$conn = new mysqli('localhost', 'root', 'coderslab', 'twitter_db');

if ($conn->connect_error){
    die("Problem z baza, przepraszamy. ");
}

$conn->close();
?>