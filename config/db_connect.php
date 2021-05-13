<?php

// connect to database
$conn = mysqli_connect('localhost', 'ezzy', 'test1234', 'ez_pizza');

// check connection
if (!$conn) echo 'Connection error: ' . mysqli_connect_error();

?>