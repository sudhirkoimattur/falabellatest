<?php 

for($i=1; $i<=100; $i++)
{
switch ($i) {

	case ($i%15 == 0):
		echo 'Linianos'.'<br>';
		break;

	case ($i%5 == 0):
		echo 'IT'.'<br>';
		break;

	case ($i%3 == 0):
		echo 'Linio'.'<br>';
		break;

	default:
		echo $i.'<br>';
		break;

}
}
?>
