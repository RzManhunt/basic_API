<?php

class Category{
	//Database connection and table name
	private $conn;
	private $table_name = 'categories';

	//object properties
	public $id;
	public $name;
	public $description;
	public $created;

	public function __construct($db){
		$this->conn = $db;
	}

	function read(){
	 
	    // select all query
	    $query = "SELECT * FROM {$this->table_name} ORDER BY name;";

	    // prepare query statement
	    $stmt = $this->conn->prepare($query);
	 
	    // execute query
	    $stmt->execute();
	 
	    return $stmt;
	}
}

?>