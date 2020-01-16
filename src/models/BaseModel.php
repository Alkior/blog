<?
/**
 * Base model class for work with SQL queryes
 */

namespace models;

abstract class BaseModel
{
  protected $instance;
  protected $table;
  protected $id
  
  function __construct()
  {
    $this->instance = new DB();
    $this->instance = $this->istance-getDB();   

  }

  public function all()
	{
		return $this->instance->query("SELECT * FROM {$this->table} ORDER BY {$this->id} DESC");
		
	}

  public function getClean($value){         
    $value = trim($value);	
    $value = htmlspecialchars($value);
    return $value;
    }

}