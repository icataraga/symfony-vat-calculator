<?php

namespace App\Library\File;

class Csv {
	
	public $filename = null;
	private $data = array ();
	
	/**
	 * @author Ion Cataraga
	 */
	public function getFilename() {
		return $this->filename;
	}
	
	/**
	 * @author Ion Cataraga
	 */
	public function setFilename($filename = null) {
		if($filename != null){
			$this->filename = 'tmp/' . $filename . '.csv';
		}
		return $this;
	}
	
	/**
	 * @author Ion Cataraga
	 */
	public function getData() {
		return $this->data;
	}
	
	/**
	 * @author Ion Cataraga
	 */
	public function setData($data) {
		$this->data = $data;
		return $this;
	}
	
	/**
	 * @author Ion Cataraga
	 */
	public function out() {
		try {
			if (is_array ( $this->getData () )) {
				
				$out = $this->getFilename() != null ? $this->getFilename() : 'php://output';
				
				$fp = fopen ( $out, "w" );
				foreach ( $this->getData () as $line ) {
					fputcsv ( $fp, $line, ',' );
				}
				
				fclose ( $fp );
			}
		} catch ( Exception $e ) {
		}
	}
	
}
?>