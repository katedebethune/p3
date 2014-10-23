 <?php 

class PasswordGen {
    	
    	// Properties (Variables)
		//private $file_name; 
		//private $path = app_path();
    
    	
    	private function generateRand($lower_bound, $upper_bound) {
    		$r = rand($lower_bound, ($upper_bound - 1));
    		return $r;
    	}
    	
    	private function createString($arr, $s, $n, $uc) {
    		$words = $arr;
    		$num = $n;
    		$sym = $s;
    		$upp_case = $uc;
    		$file_name = app_path().'/models/sym_num.txt';
    		
    		//initialize symbol / number array
    		//$sym_num = loadFile("./sym_num.txt");
    		$sym_num = ($arr=file($file_name));
    		
    		//generate random symbol
    		$symbol = $sym_num[$this->generateRand(11, 20)];
    		
    		//concatenate words with -
    		$i = 0;
    		$str = "";
    		
    		foreach($words as $word) {
    			if ( $i < (count($words)-1)) {
    				$str = $str.trim($word)."-";
    				$i++;
    			}
    			else {
    				$str = $str.trim($word);
    			}
    		}
    		
    		//add number, if requested
    		if ( $num == 1 ) {
    			$str = $str.$this->generateRand(0,10);
    		}
    		
    		//add symbol, if requested
    		if ($sym == 1) {
    			$str = $str.$symbol;
    		}
    		
    		//capitalize first letter, if requested
    		if ($upp_case == 1) {
    			$str = ucfirst($str);
    		}
    	
    		//return string
    		return $str;
    	}
    	
    	
    	/*function pickWords($arr) */
    	public function pickPassword($num_w, $sym, $num, $uc) {
    		$num_words = $num_w;
    		$symbol = $sym;
    		$number = $num;
    		$upper_case = $uc;
    		//$file_name = "/applications/MAMP/htdocs/p3/app/models/name.txt";
    		$file_name = app_path().'/models/name.txt';
    		
    		$selected = array(0);
    		
    		//load dictionary
    		//$dict = $this->loadFile("./name.txt");
    		//$dict = $this->loadFile("/applications/MAMP/htdocs/p3/app/models/name.txt");
    		//$dict = $this->loadFile($file_name);
    		$dict = ($arr=file($file_name));
    		//calculate size
    		$dict_size = count($dict);
    		//create random number
    		//within array index bounds
    		$rand = $this->generateRand(0, $dict_size);
    		$words = array();
    		
    		//initialize $selected array
    		for ($i = 0; $i < $dict_size; $i++) {
    			array_push($selected, 0);
    		}
    		//print count($selected);
    		
    		
    		//while loop to pick words
    		//doesn't allow dupes
    		$j = 0;
    		while ($j < $num_words) {
    			if ($selected[$rand] == 1) {
    				$rand = generateRand(0, $dict_size);
    			} 
    			else {
					array_push($words, $dict[$rand]);
					$selected[$rand] = 1;
					$j++;
					$rand = $this->generateRand(0, $dict_size);
				}
    		}
    		return $this->createString($words, $symbol, $number, $upper_case);
    	}
    	
}
    			
    		
?>