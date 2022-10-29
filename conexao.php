<?php
$mysqli = new mysqli("localhost","root","","db_project_devs");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Falha ao conectar ao banco de dados MySQL: " . $mysqli -> connect_error;
  exit();
}
?>