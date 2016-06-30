<!-- Stephanie Imperial,
  in web browser http://localhost/assign5/Startup.php
  index.php  Startup.php  StatCalc.php
   -->
<?php
function findMin ($sorted){
	return $sorted[0];
}
function findMax ($sorted){
	return $sorted[count($sorted)-1];
}
function findMean ($sorted){
	$sum = array_sum($sorted);
	$mean = $sum / count ($sorted);
	return $mean;
}
function findMedian ($sorted){
	//Determine if the length is odd or even.
	if ( (count($sorted) % 2) !=0){
		$index = count ($sorted) / 2;
		$median = $sorted [$index];
	}
	else{
		$indexHi = count ($sorted) / 2;
		$indexLo = $indexHi - 1;
		$median = ($sorted[$indexLo] +
				$sorted [$indexHi]) / 2;
	}
	return $median;
}


$data = $_POST['data'];
$ops = $_POST['ops'];
$ar = explode(',', $data);
$arSorted = $ar;
sort ($arSorted);
foreach ($ops as $value) {
	if ($value=='min'){
		$min=findMin($arSorted);
		print "Min: " . $min . "<br>";
	}
	else if ($value=='max'){
		$max = findMax ($arSorted);
		print "Max: " . $max . "<br>";
	}
	else if ($value=='mean'){
		$mean = findMean ($arSorted);
		print "Mean: " . $mean . "<br>";
	}
	else if ($value=='median'){
		$median = findMedian ($arSorted);
		print "Median: " . $median . "<br>";
	}
}

?>