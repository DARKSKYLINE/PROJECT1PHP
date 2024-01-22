<?php
    include "connect.php";
    
    $sql = "UPDATE tbl_smartfarm_iot SET 
        zone='$_POST[zone]',
        board='$_POST[board]',
        temp='$_POST[temp]',
        humid='$_POST[humid]',
        dmy = now()
    WHERE id=$_POST[id]";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("location: select_smartfarm.php");
    }
    else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
?>