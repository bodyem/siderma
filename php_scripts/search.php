<?php

$to_search = $_GET["search"];
parseDirectory('../',$to_search);

function parseDirectory($dir,$what){
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir),
                                              RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($iterator as $path) {
      if (is_dir($path)) {
          if(basename($path)==='products')
             parseDirectory($path,$what);
      } else {
          //echo $path->__toString();
            if (strrpos($path,".html") !== false)
             search($path->__toString(),$what);
       
      }
    }

}

function search($file,$searchthis){
    $matches = array();
    echo $searchthis;
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
    if (sizeof($matches) !== 0)
    print_r($matches);
}
?>