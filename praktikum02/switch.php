<?php 

// bikin variabel nilai
$grade = "A";
// bikin predikat
$predikat;

// bikin percabangan switch
switch ($grade) {
	case 'A':
		$predikat="Sangat Memuaskan";
		break;
	case "B":
		$predikat="Memuaskan";
		break;
	case "C":
		$predikat="Cukup";
		break;
	case "D":
		$predikat="Kurang";
		break;
	case "E":
		$predikat="Sangat Kurang";
		break;
	default:
		$predikat="Nilai Tidak Ditemukan";
		break;
}

echo "Predikat : " . $predikat;

?>