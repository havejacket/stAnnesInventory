<?php

include("db.php");

//insert a new row
$sql="INSERT INTO supplier (supplierName, contactPerson, contactDetails) VALUES ('New supplier', 'Contact','Details')";
$conn->query($sql);

//return to original page
header("location: index.php");
