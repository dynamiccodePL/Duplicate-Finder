<?php

class DuplicateFinder {
	
	public $text;
	public $duplicates = [];
	public $color = '#FFEA00';
	
	function __construct($text) {
		
		$this->text = $text;
		
	}
	
	public function search_duplicates() {
		
		$words = preg_split('/[\s,.]+/', $this->text);
		$count_values = array_count_values($words);
		$i = 0;
		
		foreach($count_values as $key => $value) {
			
			if($value > 1) {
				
				$this->duplicates[$i] = [$key, $value];
				$i++;
				
			}
			
		}
		
		return $this->duplicates;
		
	}
	
	public function mark_duplicates($color = '') {
		
		$this->color = $color == '' ? $this->color : $color;
		$patterns = [];
		
		foreach($this->duplicates as $value) {
			
			$patterns[]='/(' . $value[0] . ')\s{1}+/i';
			
		}
		
		return preg_replace($patterns, '<span style="color:' . $this->color . ';">${0}</span>', $this->text);
		
	}
	
}
