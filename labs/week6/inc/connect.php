<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'phpCoding');
if(!$connect){
  die("Connection Failed: " . mysqli_connect_error());
}