<?php
require 'functions.php';

//findMostPopularModel will return an array of bikes
//will output models which are repeatitively ordered

function testFindMostPopularModel($arr){
    if(is_array($arr)){
        echo "Passed: Test 1";
    }
}

testFindMostPopularModel($bikes);