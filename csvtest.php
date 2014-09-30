


<?php 
//hd2013.csv
$importer = new csvfile("test.csv",true); 
while($data = $importer->get(7000)) 
{ 
print_r($data); 
} 
?>

<?php
 echo "<table>";
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
		
            //$line_count = 0; 
        //else 
            //$line_count = -1; // so loop limit is ignored 

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

            //if ($max_lines > 0) 
             //  $line_count++; 
			} 
			if(empty($_GET)){
			
			foreach($data as $row) {
			
			$inc++;
			
			$row_num = $inc - 1;
		
		echo '<a href=' . '"http://web.njit.edu/~rdc9/is218/csvtest.php?row=' . $row_num . '"' . '>University ' . $inc . ' </a>';
		
		echo '</p>';
		}}		$row = $data[$_GET['row']];
				
				foreach($row as $key => $value) {
			
			echo '<td>' . $key . '</td><br>' .  $value . "<br>\n";
			
			}
		
				//echo '<br>';
			  
		}
		
		

			
			
}

echo "\n</table>";
				/*$t=0;
				while($t<100{
				if($t%10==0){
					echo "<tr>".PHP_EOL;
					}
					echo "<td>".$t."</td>".PHP_EOL;
					$t++;
					if($t%10==0){
						echo "</tr>".PHP_EOL;
						}*/
?>


