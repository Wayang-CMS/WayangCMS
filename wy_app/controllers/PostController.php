<?php
class PostController extends WY_TController
{
    public $layout = "themes/default/layout";
    
    public function menu() {
        $lists = WY_Db::all('Select * from wy_page');
        $this->layout->menu = WY_View::fetch('themes/default/menu',array('lists' => $lists));
    }
    
    public function index($permalink)
    {
        $this->menu();
        $post = WY_Db::row("select * from wy_post where permalink = :permalink", array(':permalink' => $permalink));
        $comment = WY_Db::all("SELECT name,date_format(date,'%b %d %Y %h:%i %p') as date,content from wy_comment WHERE post_id =:id",array(':id'=>$post->post_id));
        $this->layout->content = WY_View::fetch('themes/default/post', array('post' => $post,'comment'=>$comment));
        $this->layout->pageTitle = 'Wayang - '.$post->title;
    }
} 