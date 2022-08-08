<?php

class MostPopularBikes{
    
    protected $csvs = [];
    
    protected $models = [];
    
    protected $jsonData = [];
    
    protected $mostPopular = [];
    
    public function __construct($csv){
        
        if (($handle = fopen($csv, "r")) !== FALSE) { 

        while(! feof($handle)) {

           $this->csvs[] = fgetcsv($handle);
           
            }
        }
        fclose($handle);
    }
    
    public function setJsonData(){
        
        $datas = [];
        
        $columnNames = [];
        
        
        foreach ($this->csvs[0] as $singleCsv) {

            $columnNames[] = $singleCsv;

        }
        
        foreach ($this->csvs as $key => $csv) {

            if ($key === 0) {

                continue;
          
            }

            foreach ($columnNames as $columnKey => $columnName) {

                // if(isset($key)){

                    $datas[$key-1][$columnName] = $csv[$columnKey];

                // }
            }
        }

    $json = json_encode($datas);

    $this->jsonData = json_decode($json,true);

    }
    
    public function array_pluck($toPluck){

    foreach($this->jsonData as $key => $value){

        $this->models[] = $value[$toPluck];

    }
        
    }
    
    public function setMostPopularModel(){
        
        $bikes = [];

        $data = [];
        
        foreach($this->models as $key => $value){

            $bikes[] = strtoupper(str_ireplace(array( '-',' '),'',$value));

        }

        $uniqueModel = array_unique($bikes);

        $this->mostPopular = array_diff_assoc($bikes, $uniqueModel);

        $this->mostPopular = array_slice((array_count_values($this->mostPopular)),0,3);



    }

    public function getMostPopularBikes(){

        return $this->mostPopular;

    }
    
}



