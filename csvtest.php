


<?php 
//hd2013.csv
// "hdtest.csv",

$importer = new csvfile("hd2013.csv", true); 
while($data = $importer->get(7000)) 
{ 
print_r($data); 
} 
?>

<?php
 
class csvfile
{ 	
	
    private $fp; 
    private $pheader; 
    private $header; 
    private $delimiter; 
    private $length; 
 
    function __construct($filename, $pheader=false, $delimiter=",", $length=8000) 
    { 
		ini_set('auto_detect_line_endings', TRUE);
        $this->fp = fopen($filename, "r"); 
        $this->pheader = $pheader; 
        $this->delimiter = $delimiter; 
        $this->length = $length; 
        $this->lines = $lines; 

        if ($this->pheader) 
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
        

        $data = array(); 

        if ($max_lines > 0) 
		//if(($filename = fopen("test.csv", "r" )) !== FALSE){
         
 
        while (($line_count < $max_lines && $row = fgetcsv($this->fp, $this->length, $this->delimiter)) !== FALSE) 
        { 
            if ($this->pheader) 
			
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

           
			}
			
			if(empty($_GET)){
			
			foreach($data as $row) {
			
			$inc++;
			
			$row_num = $inc - 1;
		
		echo '<a href=' . '"http://web.njit.edu/~rdc9/is218/csvtest.php?row=' . $row_num . '"' . '>University ' . $inc . ' </a>';
	
		echo '</p>';
		}}
				$row = $data[$_GET['row']];
				
				echo "<table border=1>";
				
				foreach($row as $key => $value) {
					echo "<tr>";
					echo "<th> $key</th> <td>  $value </td>";
					echo "</tr>";
			}
				echo "</table>";
				
				//echo '<br>';
			  
	}
}
	
?>

