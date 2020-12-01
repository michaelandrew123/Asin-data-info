<?php
//Object Oriented style
session_start();
$mysqli = new mysqli("localhost","root","","xlsxdb");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}