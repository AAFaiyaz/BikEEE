<?php

require 'MostPopularBikes.php';

$bikes = new MostPopularBikes('../data.csv');

$bikes->setJsonData();

$bikes->array_pluck('Model');

$bikes->setMostPopularModel();

var_dump($bikes->getMostPopularBikes());

$expectedArray = ['EC5','BERYLL','DIRTDRIFTER3000'];
var_dump($expectedArray);
function testMostPopularBikes(){

    

}
testMostPopularBikes();

?>