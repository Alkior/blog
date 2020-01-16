<?

namespace cont;

abstract class BaseController
{
    protected $title;
    protected $content;
    protected $model;

    public function __construct()	{
        $this->title = $title;        
		//$this->auth = Users::isAuth();
		//$this->request = $request;
    }
    
    public function template()
	{
		echo RND::render('tmp/maintmp.php', [
				'title' => $this->title,
				'content' =>$this->content
		]);
	}
}