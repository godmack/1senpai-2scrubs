<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model {

	public $values;

	public function __construct()
	{
		$values = array();
	}

	public function getMultValues($nRows, $nColumns)
	{
		$values = array();
		for ($i=1; $i <= $nRows; $i++) { 
			for ($j=1; $j <= $nColumns ; $j++) { 
				$values = array($i,$j,$i*$j);
			}
		}

		return $values;
	}

}
