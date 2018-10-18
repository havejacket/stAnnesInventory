<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
include("db.php");

?>

<h1>Suppliers</h1>
<a href="addSupplier.php">
	<input type='button' value='Add new'></button><br/><Br/>
</a>
<?php
$sql = "SELECT * from supplier";
$data=execSQL($sql);


//echo '<pre>';
//print_r($data);
//echo '</pre>';

if (count($data) > 0) {
	echo "<center><table border=1>
	<tr>
		<td>
			
		</td>
		<td>
			SupplierName
		</td>
		<td>
			Contact Person
		</td>
		<td>
			Contact Details
		</td>
	</tr>";

	
	

    // output data of each row
    foreach ($data as $row) {
        echo "<tr><td><a href='editSupplier.php?id=" . $row["supplierID"]. "'>

<img src='images/editIcon.png' class='imageIcon'>
</a>

        </td><td>" . $row["supplierName"]. "</td><td>" . $row["contactPerson"] . "</td><td>" . $row["contactDetails"]. "</td></tr>";
    }


    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();





?>
