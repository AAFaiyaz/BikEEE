<?php

function csvToJson($file){
    if (($handle = fopen($file, "r")) !== FALSE) {
        $csvs = [];
        while(! feof($handle)) {
           $csvs[] = fgetcsv($handle);
        }
        $datas = [];
        $column_names = [];
        foreach ($csvs[0] as $single_csv) {
            $column_names[] = $single_csv;
        }
        foreach ($csvs as $key => $csv) {
            if ($key === 0) {
                continue;
            }
            foreach ($column_names as $column_key => $column_name) {
                if(isset($key)){
                    $datas[$key-1][$column_name] = $csv[$column_key];
                }
            }
        }
    $json = json_encode($datas);
    fclose($handle);
    $json = json_decode($json,true);
    return $json;
}
}
$jsonData = csvToJson('data.csv');


function array_pluck($arr,$toPluck){
    
    $model = [];
    foreach($arr as $key => $value){
        $model[] = $value[$toPluck];
    }
    return $model;
    }
$models = array_pluck($jsonData,'Model');

function findMostPopularModel($arr){
    $bikes = [];
    foreach($arr as $key => $value){
        $bikes[] = strtoupper(str_ireplace(array( '-',' '),'',$value));
    }
    $uniqueModel = array_unique($bikes);
    
    $mostPopular = array_diff_assoc($bikes, $uniqueModel);
    
    $mostPopular = array_slice((array_count_values($mostPopular)),0,3);
    return $mostPopular;
}
$bikes = findMostPopularModel($models);