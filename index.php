<!-- На вход подается строка целых уникальных (не повторяющихся) чисел, разделенных пробелами (elements).
Следующая строка содержит число элементов в комбинации (k).
1 ≤ k ≤ количество elements

Найдите все возможные комбинации заданной длины. Выведите их в любом порядке. -->


<?php

function allCombination ($strNumbers) {
	$arrNumbers = explode (" ", $strNumbers);
	$arrCombination = [];
	for ($i = 0; $i < count($arrNumbers); $i++) {
		for ($j = 0; $j < count($arrNumbers); $j++ ) {
			$arrCombination[] = $arrNumbers[$i]." ".$arrNumbers[$j];
		}
	}
	return $arrCombination;
}


foreach (allCombination("1 2 3") as $value) {
	echo $value."<br>";
}


?>