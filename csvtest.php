


<?php 
$importer = new csvfile("test.csv",true); 
while($data = $importer->get(500)) 
{ 
print_r($data); 
} 
?>


<?php
 echo "<html><body><table>\n\n";
class csvfile
{ 	
	
    private $fp; 
    private $parse_header; 
    private $header; 
    private $delimiter; 
    private $length; 
 
    function __construct($filename, $parse_header=false, $delimiter=",", $length=8000) 
    { 
		ini_set('auto_detect_line_endings', TRUE);
        $this->fp = fopen($filename, "r"); 
        $this->parse_header = $parse_header; 
        $this->delimiter = $delimiter; 
        $this->length = $length; 
        $this->lines = $lines; 

        if ($this->parse_header) 
        { 
           $this->header = fgetcsv($this->fp, $this->length, $this->delimiter); 
        } 

    } 
 
    function __destruct() 
    { 
        if ($this->fp) 
        { 
            fclose($this->fp); 
        } 
    } 
 
    function get($max_lines=0) 
	
    { 
        //if $max_lines is set to 0, then get all the data 

        $data = array(); 

        if ($max_lines > 0) 
            $line_count = 0; 
        else 
            $line_count = -1; // so loop limit is ignored 

        while ($line_count < $max_lines && ($row = fgetcsv($this->fp, $this->length, $this->delimiter)) !== FALSE) 
        { 
            if ($this->parse_header) 
            { 
                foreach ($this->header as $i => $heading_i) 
                { 
				
                    $row_new[$heading_i] = $row[$i]; 
                } 
                $data[] = $row_new; 
            } 
            else 
            { 
                $data[] = $row; 
            } 

            if ($max_lines > 0) 
               $line_count++; 
			} 
				








				if(empty($_GET)){
			foreach($data as $row) {
			$i++;
			$row_num = $i - 1;
		echo '<a href=' . '"http://web.njit.edu/~rdc9/is218/csvtest.php?row=' . $row_num . '"' . '>University ' . $i . ' </a>';
		echo '</p>';
		}}		$row = $data[$_GET['row']];
				foreach($row as $key => $value) {
			echo '<table><tr><td>' . $key . ': ' . $value . "</tr></td></table>\n";
			}
				echo '<br>';
			  
		}
		
		
		
		
		
		
		
		
		
		
		
		
			
}


echo "\n</table></body></html>";

?>
<?php /*if(empty($_GET)) {
    foreach($car_orders as $car_order) {
      $i++;
      $car_order_num = $i - 1;
      echo '<a href=' . '"http://web.njit.edu/~rdc9/is218/cars.php?car_order=' . $car_order_num . '"' . '>Car Order ' . $i . ' </a>';

      echo '</p>';
    }
  }

  $car_order = $car_orders[$_GET['car_order']];
  
   foreach($car_order as $key => $value) {
    echo $key . ': ' . $value . "<br>\n";
   }*/

?>

