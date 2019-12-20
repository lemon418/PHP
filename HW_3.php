<?php

// Задача №1

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style>
			p {
				font: 1.1em bold Arial;
				color:  #0000ff;
				padding-left: 40px;
			}
		</style>
	</head>	
	<body>
	


<p>Задача №1</p>

<?php
$str = 'this_is_string';

function myCamel($a) {

	$b = strtr($a, '_', ' ');	
	$c = ucwords($b);
	$d = str_replace(' ', '', $c);
	return lcfirst($d);
}
var_dump($str);
var_dump(myCamel($str));

?>

<p>Задача №2</p>

<?php
// Задача №2
$str = 'C:\OpenServer\testsite\www\someFile.txt';

function toFile($a) {
	$b = explode("\\", $a);
	$c = array_pop($b);
	$d = explode(".", $c);
	return $d[0];
}

var_dump(toFile($str));

// Задача №3 
?>

<p>Задача №3</p>

<?php
$text1 = 'Дано два текста';
$text2 = 'Дао два текста';

var_dump(similar_text($text1, $text2));

// Задача №4

?>

<p>Задача №4</p>

<?php
$arr = [888, 55, 129];
?>

<p>неотсортированый массив</p>

<?php
var_dump($arr);


				function mySort($a) {
						$arrKey = [];

						foreach($a as $value) {
						$b = str_split($value);
 						// var_dump($b);
						$key = array_sum($b);
 						// var_dump($key);
						array_push($arrKey, $key);
						}
 						// var_dump($arrKey);
						$workArr = array_combine($arrKey, $a);					
 						// var_dump($workArr);
 						$sumSortedArr = ksort($workArr);
?>

<p>отсортированый массив</p>

<?php
 						var_dump($workArr);
?>	
	<p>сумма цифр отсортироанного массива</p>
<?php
	
						$replace = array_keys($workArr);
 						// var_dump($replace);

 						foreach ($replace as $value) {
							echo '<p>' . $value . '</p>';
						}
				}


mySort($arr);
?>


<p>Задача №5</p>




<?php
// Задача №5
	$text = "Mary Had a Little lamb and She LOVED It So";

	$upCase = function($data) {
		return strtoupper($data);
	};

	$lowCase = function($data) {
		return strtolower($data);
	};

	$firstToUp = function($data) {
		$data = strtolower($data);
		return ucwords($data); 
	};

			function conv($str, $pre) {
				// echo $pre($str);
				echo $pre($str);				 
			};  

conv($text, $upCase);

?>
	



	</body>
</html>