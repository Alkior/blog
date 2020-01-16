<?

namespace cont;

class WriteController extends BaseController
{

    protected $post; //заменить далее на класс Request

    public function __construct($post)
    {
        parent::__construct();
        $this->model = new WriteModel('posts', 'id');
        $this->post = $post;
    }
    
    public function epicFail(){        
            $article = $this->model->writeDB($this->title, $this->content);        
    }
    
    public function addIndex(){
        return $this->model->all()
    }
    
}