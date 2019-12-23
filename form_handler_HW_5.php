<?php

$post = $_POST;
var_dump($post);

$files = $_FILES;
var_dump($files);

$file_name = $files['picture']['name'];
var_dump($file_name);

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


	for ($i=0; $i<=count($tmp_name)-1; $i++) { 
		
			if (move_uploaded_file($tmp_name[$i], "img/$end_name[$i]")) {

			echo "Файл успешно загружен <br>";

			} else {
			echo "Не удалось загрузить файл <br>";
		
			}
	}

