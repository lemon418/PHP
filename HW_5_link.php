<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>link</title>
	<style>
		.link {
			color: red;
			font: 20px bold Arial;
		}
	</style>
</head>
<body>

	<form action="HW_5_link.php" method="POST" name="link">
		<input id=url type="text" name="address">
		<input type="submit" value="получить">

	</form>	


	<?php 
		$post = $_POST;
		$link = trim($post[address]);

		write($link);

		function write($data) {
			if (empty($data)) {
				echo "Заполните поле";
				return;
			}

			else if (!filter_var(($data), FILTER_VALIDATE_URL)) {
				echo "Введите ссылку правильно";
				return;
			}

			else  {			
				checkLnk($data);
 
			}
		}

		function checkLnk($lnk) {
				$arrLink = file("links.txt");
				// var_dump($arrLink);

				foreach ($arrLink as $key) {
					$ln = explode("@", $key);
					// var_dump($ln);
					if ($ln[0] == $lnk) {
					echo $ln[1];
					return;
					}
				}
				// $aLink = md5($lnk);
				$aLink = short($link);
					
				$shLink =  "http://" . $aLink;
				file_put_contents("links.txt", $lnk . "@" . "$shLink\n", FILE_APPEND);
				echo $shLink;				
		}	

		function short($a) {
			 $arrLink = file("links.txt");
			 $cr = crypt($a);
			 $shortCr = substr($cr, 28);
			 foreach ($arrLink as $key) {
			 	$ln = explode("@", $key);
					// var_dump($ln);
					if ($ln[1] == $shortCr) {
						short($a);	
					}
					else {
						return $shortCr;
					}
			 }

		}
	 
		// var_dump(short($link));
	?>
	<p class="link"> 

	</p>

	<script src="js/link.js"></script>	
</body>
</html>