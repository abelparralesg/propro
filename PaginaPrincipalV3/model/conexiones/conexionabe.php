<?php
	include_once('model/config.php');
	class Conexion{
		protected $db;
		public function __construct(){
			$this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			if($this->db->connect_errno){
				exit();
			}
			$this->db->set_charset(DB_CHARSET);
		}
	}
?>