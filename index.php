<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert_smartfarm.php" method="post" enctype="multipart/form-data">
           Zone : <input type="text" name="zone" />
           Board : <input type="text" name="board" />
           อุณหภูมิ : <input type="text" name="temp" />
           ความชื้น : <input type="text" name="humid" />
           <input type="submit" value="Save">
    </form>
</body>
</html>