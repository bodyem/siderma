<?php


class searcher {

public $needle;
public $rezults = array();
public $where = array();

function __construct($what){
    $this->needle = $what;
}

public function parseDirectory($dir){
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir),
                                              RecursiveIteratorIterator::CHILD_FIRST);
                                              
    foreach ($iterator as $path) {
      if (is_dir($path)) {
          if(basename($path)==='products')
             searcher::parseDirectory($path);
      } else {
          //echo $path->__toString();
            if (strrpos($path,".html") !== false){
                $my_result =    searcher::search($path->__toString(),$this->needle);
                if(sizeof($my_result)!==0)
                 array_push($this->rezults, $my_result);
            }
            
       
      }
    }
  

}

function search($file,$searchthis){
    $matches = array();
    $handle = @fopen($file, "r");
    if ($handle)
    {
        while (!feof($handle))
        {
            $buffer = fgets($handle);
            if(strpos($buffer, $searchthis) !== FALSE)
                $matches[] = $buffer;
        }
        fclose($handle);
    }
    
    //show results:
    if (sizeof($matches) !== 0){
        array_push($this->where,$file);
        return $matches;
    }
}

}


?>