<?php

namespace Models {
	class APIKey {
	
		public function __construct() {;}
	
		public function verifyKey($key, $origin) {
			return true;	
		}
	
	}
	
	class User {
		public function __construct() {;}
		
		public function get($idType, $idData) {
			return $this;	
		}
	}
}
?>
