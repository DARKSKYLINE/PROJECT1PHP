<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php
    include "connect.php";

    $sql = "SELECT * FROM tbl_smartfarm_iot";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
?>

<div class="container">
<style type="text/css">
		body{
			font-family: 'Kanit', sans-serif;
		}
	</style>
    <h1 class="text-center"> แสดงข้อมูลของ Smartfarm</h1>
    <table class="table table-striped-columns table-hover">
        <tr>
            <th> # </th>
            <th> Zone </th>
            <th> MCU Board </th>
            <th> อุณหภูมิ </th>
            <th> ความชื้น </th>
            <th> วันที่-เดือน-ปี เวลา </th>
            <th> แก้ไข </th>
            <th> ลบ </th>
        </tr>
    <?php
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["id"]. " - Zone: " . $row["zone"]. "- Board " . $row["board"]. "- Temp: " .$row["temp"]. "- humidity" .$row["humid"]. "<br>";
    ?>
        <tr>
            <td> <?php echo $row["id"]; ?></td>
            <td> <?php echo $row["zone"]; ?></td>
            <td> <?php echo $row["board"]; ?></td>
            <td> <?php echo $row["temp"]; ?></td>
            <td> <?php echo $row["humid"]; ?></td>
            <td> <?php echo $row["dmy"]; ?></td>
            <td> <?php echo"<a href='edit_smartfarm.php?id=$row[id]'> แก้ไข </a>"; ?></td>
            <td> <?php echo"<a href='delete_smartfarm.php?id=$row[id]'> ลบ </a>"; ?></td>
            
        </tr>
    <?php   
        }
    ?>
        
    </table>
</div>

<?php
    echo "</table>";
    } else {
    echo "0 results";
    }
    $conn->close();
?>