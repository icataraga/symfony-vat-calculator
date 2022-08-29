<?php

namespace App\Library\Sanitization;


class Sanitization {
	private $data = null;
	public function setData($data) {
		$this->data = $data;
	}
	public function getData() {
		return $this->sanitize ( $this->data );
	}
	private function sanitize($data) {
		if (is_array ( $data )) {
			
		} else {
		}
	}
}
?>