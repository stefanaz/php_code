<?php 
require 'classes/Database.php';

$database = new Database;


$database->query('SELECT * FROM posts WHERE id = :id');
$database->bind(':id', 1);
$rows = $database->resultset();



foreach($rows as $row) {
  print_r($row);
}

