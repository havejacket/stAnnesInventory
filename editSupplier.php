<?php

include("db.php");

$id=$_GET["id"];

echo "I am editing ID $id!<hr>";

$sql="select * from supplier where supplierID=$id";

$data=execSQL($sql);

var_dump($data);
echo "<hr>";
$row=$data[0];

var_dump($row);

die("here");
?>
<h3>Edit supplier info</h3>
<form action="saveSupplier.php">
<input type="hidden" name="id" value="<?php echo $id ?>">
Supplier name: <input type="text" value="<?php echo $row["supplierName"] ?>" name="supplierName"><br>
Contact person: <input type="text" value="<?php echo $row["contactPerson"] ?>" name="contactPerson"><br>
Contact details: <input type="text" value="<?php echo $row["contactDetails"] ?>" name="contactDetails"><br>
<input type="submit" value="Save">
</form>



