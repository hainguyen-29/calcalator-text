<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<?php 
		$a = "";
		$b = "";
		$calc = "";
		$str = "";
		if(isset($_REQUEST["number1"]) && isset($_REQUEST["number2"]) && isset($_REQUEST["pheptoan"])){
			$a = $_REQUEST["number1"];
			$b = $_REQUEST["number2"];
			$calc = $_REQUEST["pheptoan"];
			if(is_numeric($a) && is_numeric($b) && is_string($calc)){
					switch($calc){
						case "+": $result = $a + $b;
							$str = $a. " ". $calc. " ". $b. " = ". $result;  
							break;
						case "-": $result = $a - $b;
							$str = $a. " ". $calc. " ". $b. " = ". $result;
							break;
						case "*":
						case "x": $result = $a * $b;
							$str = $a. " ". $calc. " ". $b. " = ". $result;
							break;
						case "/":
						case ":": $result = $a / $b;
							$str = $a. " ". $calc. " ". $b. " = ". $result;
							break;
						case "%": $result = $a % $b;
							$str = $a. " ". $calc. " ". $b. " = ". $result;
							break;
						default : $str = " Nhập đúng phép toán";
							break;
					}
			}else $str = "Lỗi!! Kiểm tra lại!";
		}
	 ?>
</head>
<body>
	<div class="main">
		<form action="#" method="post" accept-charset="utf-8">
			<h1>CALCULATOR</h1>
			<table>
				<tr>
					<td>Nhập số thứ nhất:</td>
					<td class="row2"><input type="text" name="number1" placeholder="<?php echo $a ?>"></td>
				</tr>
				<tr>
					<td>Chọn phép toán:</td>
					<td class="row2"> <input type="text" name="pheptoan" placeholder="<?php echo $calc ?>"></td>
				</tr>
				<tr>
					<td>Nhập số thứ hai:</td>
					<td class="row2"><input type="text" name="number2" placeholder="<?php echo $b ?>"></td>
				</tr>
			</table>
			<div class="submit">
				<input type="submit" value="Kết quả">
				<p>
					<?php 
					echo $str;
				 ?>
				</p>
			</div>
		</form>
	</div>
</body>
</html>