<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
		body{
			font-family: 'Kanit', sans-serif;
		}
	</style>
</head>
<body>
    <div class="container">
        <h1> แบบฟอร์มกรอกข้อมูล smartfarm </h1>
        <form action="insert_smartfarm.php" method="post" enctype="multipart/form-data">
            Zone : <input type="text" name="zone" class="form-control"/>
            Board : <input type="text" name="board"class="form-control" /> 
            อุณหภูมิ : <input type="text" name="temp" class="form-control"/> 
            ความชื้น : <input type="text" name="humid"class="form-control" />
            <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
</body>
</html>