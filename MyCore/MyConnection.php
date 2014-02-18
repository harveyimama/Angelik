<?php 

class Myconnection
{
public $connection;



public function connect()
{
$this->connection = new PDO('mysql:host=localhost;dbname=texasrms_23', 'root', '');
}









}



?>