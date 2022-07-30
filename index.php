<?php
if (($handle = fopen("data.csv", "r")) !== FALSE) {
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
    // print_r($json);
    // echo "<br>";
    // $unique = array_unique( $json);
    // $dupes = array_diff_key( $json, $unique );
    // print_r ($json2);
    // echo $json[0]['Model'];
    $model =[];
    foreach($json as $key => $value){
        $model[] = strtolower(str_ireplace(array( '-',' '),'',$value['Model']));
    }
    // print_r($model);
    $unique = array_unique($model);
    // echo "<br>";
    $duplicates = array_diff_assoc($model, $unique);
    
    $duplicates = array_slice((array_count_values($duplicates)),0,3);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <img class="top-cover" src="bikee.png" alt="">
    <?php
            
        foreach($duplicates as $key => $value) : ?>
            <h1>Our Most Searched Bike: <?php echo " ". $key; ?></h1>
        <?php
            endforeach;
          
          ?>
</body>
</html>