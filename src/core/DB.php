<?

namespace core;

class DB {
    //private static $instance; 
    //public $db;
    private $db;

    public function __construct(){

        try {
         $this->db = new \PDO("DBMS:host=DB_HOST;dbname=DB_NAME", "DB_USER", "DB_PASS");
        /*** echo a message saying we have connected ***/
    
       }
        catch(PDOException $e)
            {
                echo $e->getMessage();
           }    
     }
    
     public function getDb() {
           if ($this->db instanceof PDO) {
                return $this->db;
           }
     }