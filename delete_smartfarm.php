<?php
    include "connect.php";
    $id=$_GET['id'];
    $sql = "DELETE FROM tbl_smartfarm_iot WHERE id=$id ";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("location: select_smartfarm.php");
    }
    else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>