<?php
class Articles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function testArticle()
    {
        print($this->articles_model->getStar('1'));
    }

    public function testArticleUser()
    {
        print($this->articles_model->getStarUser(1, 1));
        $this->articles_model->updateStar(1, 1);
        print($this->articles_model->getStarUser(1, 1));
    }

    public function article($id)
    {
        echo $id;
    }
}
