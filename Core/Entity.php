<?php
namespace Core;
class Entity{
	public $orm;
	protected $bdd;
	protected $param;
	protected $table;
	function  __construct($param) 
    { 
    	$this->table = $this->modelName();
    	$this->orm = new ORM(Database::getDB());
    	$this->bdd = Database::getDB();
	    $this->param = $param;
	    foreach($param as $key => $value){
        	$this->{$key} = $value;
      	}
    }
    public function save()
	{
		$this->orm->create($this->table,$this->param);
	}
	public function modelName()
	{
		return strstr(substr(strstr(get_called_class(), "\\"),1), "Model",true);
	}
}	