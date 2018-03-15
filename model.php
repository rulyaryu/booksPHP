
<?php

// первый вариант model требует больше памяти и дольше грузится 
// с model2.php работает быстрей
ini_set('memory_limit', '-1');

$randomArr = [];

function getRandomArr($start, $ends) {
	$rangeArr = range($start, $ends);
	shuffle($rangeArr);
	return array_slice($rangeArr, 0, 50);
}

$arrayKeys = ['id', 'imgId', 'imgUrl', 'bookName', 'author', 'catId', 'category'];

$src = new SplFileObject('data/src.csv', 'r');
$arr = []; 

while(!$src->eof()) {
	if(count(str_getcsv($src -> current())) == 7){
		$arr[] = array_combine($arrayKeys ,str_getcsv($src -> current()));
	}
	$src -> next();
}

$random = getRandomArr(0, count($arr));

// $categories = array_values(array_unique(array_column($arr, 'category')));


foreach ($random as $key => $value) {
	$randomArr[] = array_slice($arr[$value], 0);
}
 ?>