<?php
include("../model/mydb.php");
session_start();

$mydb= new MyDB();
$conObj = $mydb->openCon();
$data = $mydb->getUserEmail($conObj,"emp",$_SESSION['email']);
if($data->num_rows>0)
{
    
    while($row=$data->fetch_assoc())
    {
        $name=$row['username'];
        $file=$row['nid'];
    }
}
