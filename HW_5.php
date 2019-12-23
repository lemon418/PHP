form_handler_HW_5.php - обработчик
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Загрузка файлов</title>
</head>
<body>
	<form action="form_handler_HW_5.php" method="post" enctype="multipart/form-data">
		
		<div>
			<input type="text" name="title" placeholder="title">
		</div>
		<div>
			<input type="file" accept="image/*" multiple name="picture[]">
		</div>
		<div>
			<input type="submit" value="загузить">
		</div>
	</form>
	
</body>
</html>

