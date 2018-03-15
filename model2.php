<?php

// ini_set('memory_limit', '-1');

$randomArr = [];

function getRandomArr($start, $ends) {
	$rangeArr = range($start, $ends);
	shuffle($rangeArr);
	return array_slice($rangeArr, 0, 50);
}

$arrayKeys = ['id', 'imgId', 'imgUrl', 'bookName', 'author', 'catId', 'category'];

$src = new SplFileObject('data/src.csv', 'r');
$arr = []; 

$src -> seek(PHP_INT_MAX);

$max = $src-> key() +1;
$random = getRandomArr(0, $max);

foreach ($random as $key => $value) {
	$src -> seek($value);
	if(count(str_getcsv($src -> current())) == 7){
		$randomArr[] = array_combine($arrayKeys, str_getcsv($src -> current()));
	}
	$src -> next();
}

// $categories = array_values(array_unique(array_column($arr, 'category')));

 ?>