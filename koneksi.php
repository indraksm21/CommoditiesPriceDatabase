<?php

try
{
    $conn = mysqli_connect("localhost","root","") or die ("SERVER DOWN");
    $db = mysqli_select_db($conn,"ppsiuas") or die ("DATABASE TIDAK ADA");
}
catch (\Throwable $th)
{
    throw $th;
}


?>