<?php

$post = $_POST;
var_dump($post);

// данные о загружаемых файлах в массиве $_FILES
$files = $_FILES;
var_dump($files);

// имя файла
$file_name = $files['picture']['name'];
var_dump($file_name);



//расширение файла

// $ext = pathinfo($file_name, PATHINFO_EXTENSION);
// var_dump($ext);

$end_name = [];
foreach ($file_name as $nm) {
	$ext = pathinfo($nm, PATHINFO_EXTENSION);
    var_dump($ext);

    $name = md5($nm); //+ date;
	var_dump($nm);

	$full_name = $name . "." . $ext;
	array_push($end_name, $full_name);



	$tmp_name = $files['picture']['tmp_name'];
				var_dump($tmp_name);

		}
	var_dump($end_name);

	// var_dump($full_name);
//Необходимо изменять имя файла
// $name = md5($file_name); //+ date;
// var_dump($name);

// $full_name = $name . "." . $ext;
// var_dump($full_name);

// проверить размер
// проерять тип

//перемещение файла из временной папки
// var_dump(gettype($file_name[0]));

// move_uploaded_file($tmp_name[0], "img/$end_name[0]");
// move_uploaded_file($tmp_name[1], "img/$end_name[1]");



	// $tmp_name = $files['picture']['tmp_name'];		

	for ($i=0; $i<=count($tmp_name)-1; $i++) { 
		
			if (move_uploaded_file($tmp_name[$i], "img/$end_name[$i]")) {

			echo "Файл успешно загружен <br>";

		} else {
			echo "Не удалось загрузить файл <br>";
		
		}
	}
			
	// 	}
	// }
