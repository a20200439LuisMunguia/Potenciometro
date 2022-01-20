<?php
$conn = new mysqli("localhost","root","","act_potenciometro");
    
if ($conn->connect_errno) {
    echo "Error: ". $conn->connect_error;
}