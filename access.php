<?php

class access
{
public $mysqli;
//echo 'I m inside _1';

function setter()
{

$this->mysqli=new mysqli($host="localhost", $user="root", $pswd="", $dbname="db_learnit4mme");
return $this->mysqli;

}

function check_db_connection()
{
if($this->mysqli->connect_errno)
{
  echo "Database connection failed".$mysqli->connect_errno;  
}    

else
{
    echo "Database connection successful"."<BR>";
    echo 'I m inside _1';
}
}

function check_connection()
{

if(!$this->mysqli->select_db($dbname))
{
    echo "Database not available". $mysqli->connect_errno;
}
else
{
    echo "Database available";
}
}

}

?>