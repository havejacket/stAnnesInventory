<?php

include("db.php");

$id=$_GET["id"];
$supplierName=$_GET["supplierName"];
$contactPerson=$_GET["contactPerson"];
$contactDetails=$_GET["contactDetails"];


$sql="update supplier set supplierName='$supplierName', contactPerson='$contactPerson', contactDetails='$contactDetails' where supplierID=$id";
$conn->query($sql);

header("location: index.php");