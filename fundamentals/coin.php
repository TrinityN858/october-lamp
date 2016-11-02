<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	function randomNum(){
		return rand(0,1);
	}
	function coinToss($num){
		for ($i = 0; $i < $num; $i++){
			$coin = randomNum();
		}
	}
?>
</body>
</html>