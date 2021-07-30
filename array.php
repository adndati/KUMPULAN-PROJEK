<? php
$nilai = $_POST['nilai'];
switch($nilai)
{
	case "A" :
	echo "Sangat Baik";
	break;
	case "B" :
	echo "Baik";
	break;
	case "C":
	echo "Cukup";
	break;
	case "D":
	echo "Kurang";
	break;
	case "E":
	echo "Kurang Sekali";
}
?>
