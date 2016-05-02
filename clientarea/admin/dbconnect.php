<?php
$connection = mysqli_connect("localhost","root","","clientarea");
if(!($connection))
{
     die('oops connection problem ! --> '.mysql_error());
}