<?php

$conn = new mysqli('localhost:3307', 'root', '', 'grocery');

if ($conn->connect_error) {
    exit('Connection failed: '.$conn->connect_error);
}
