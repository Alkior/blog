<?

namespace models;

class WriteModel extends BaseModel
{
    protected $date;
    protected $title;
    protected $content;
    protected $id_user;
    protected $visible;
    protected $commented;

    function __construct($table, $id)
    {
        parent::__construct();
        $this->table = $table;
        $this->id = $id;       
    }

    public function writeDB($title, $content){
        $query = $this->db->prepare("INSERT INTO {$this->table} (title, content) VALUES (:title, :content)");
        $params = [':title'=>$title, ':content'=>$content];
        $query->execute($params);
        
        if(!$query) throw new Exeption($query);           
    }


}