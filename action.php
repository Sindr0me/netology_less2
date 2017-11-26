Ваше число <?php echo htmlspecialchars($_POST['a']); ?>.
<br><button><a href="index.html">Назад</a></button><br><br>

<?php 
$userint = htmlspecialchars($_POST['a']);
$one = 1;
$two = 1;
$result = 0;

while ($result == 0){ 

	if ($one > $userint) {
		echo "задуманное число НЕ входит в числовой ряд";  $result = 1;
	}

	else {

		if ($one == $userint) {
			echo "задуманное число входит в числовой ряд";  $result = 1;
		}

		else {
			$three = $one;
			$one = $one + $two;
			$two = $three;
			}
		}
}
?>