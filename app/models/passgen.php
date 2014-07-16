<?php
	
class passgen{
	var $words_array;

	public function __construct(){
		$this->get_array();
	}

	public function get_array(){
		$dict= fopen (app_path().'/database/dictionary.txt', "r"); 
		$i = 0;

		//Goes to every line of the dictionary and adds it to the array
		while (!feof($dict)){
			$words_array[$i]= fgets($dict);
			$i++;
		}

		fclose ($dict);

		return $words_array;
	}

	public function get_password(){
		$words_array= self::get_array();
		$num_wds_dict = count ($words_array);
		$password =" ";	
		$error=0;
		$flag=0;
		$sep = Input::get('separation');
		$words= Input::get('words');
		$upper= Input::get('upper');
		$number= Input::get('number');
		$symbol= Input::get ('symbol');

		if(isset($sep)){
			if($sep=="space"){
				$sep=" ";
			}
		}

		if(isset($words) && $words<=100 && $words>0){
			for ($i=0; $i<$words; $i++){
				$rand= rand(0, $num_wds_dict);
				if ($flag==0){
					$flag=1;
					if (isset($upper)){
						$password= ucfirst($words_array[$rand]);
					}
					else{
						$password= $words_array[$rand];
					}
				}
				else{
					$password= $password.$sep.$words_array[$rand];
				}
			}
		}
		else{
			$error=1;
			$password= "YOU HAVE NOT CHOOSEN A VALID NUMBER OF WORDS, CHOOSE BETWEEN 1 AND 100";
		}
		

		if (!isset($words)){
			$password= "CHOOSE NUMBER OF WORDS";
		}

		if (isset($number) && $error==0){
			$rand= rand(0,100); 
			$password = $password.$rand;
		}

		if (isset($symbol) && $error==0){
			$password= $password."@";
		}

		return $password;

	}
}
	 
?>