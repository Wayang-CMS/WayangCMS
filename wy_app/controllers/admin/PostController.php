<?php

class PostController extends WY_TController
{
    public $layout = 'admin/index';
    
    public function all()
    {
        $post = WY_Db::all("SELECT wy_p.*,wy_c.title as c_title FROM wy_post wy_p,wy_category wy_c WHERE wy_p.cat_id=wy_c.cat_id ORDER BY post_id ASC");
        $this->layout->pageTitle = 'Wayang CMS - Posts';
        $this->layout->content = WY_View::fetch('admin/posts/all',array('post'=>$post));
    }
    
    public function add()
    {
        if(WY_Request::isPost()){
            $author=  WY_Session::get('display');
            $title = $_POST['title'];
            if(isset($_POST['published']))
            {
                $published = 1;
            }
            else{
                $published = 0;
            }
            if(isset($_POST['a_comment']))
            {
                $comment = 1;
            }
            else{
                $comment = 0;
            }
            if($_POST['permalink']==="")
            {
                $permalink = strtolower(str_replace(' ', '-', $_POST['title']));
            }
            else
            {
                $permalink = strtolower(str_replace(' ', '-', $_POST['permalink']));
            }
            $content = $_POST['content'];
            $tags = $_POST['tags'];
            $cat_id = $_POST['category'];
            WY_Db::execute('INSERT INTO `wy_post`'
                    . '(`cat_id`, `title`, `tag`, `date_add`, `author`, `content`, `comment_open`, `permalink`, `published`) '
                    . 'VALUES '
                    . '(:cat_id,:title,:tag,NOW(),:author,:content,:comment_open,:permalink,:published)', array(
                    ':cat_id'=>$cat_id,
                    ':title'=>$title,
                    ':tag'=>$tags,
                    ':author'=>$author,
                    ':content'=>$content,
                    ':comment_open'=>$comment,
                    ':permalink'=>$permalink,
                    ':published'=>$published,
                ));
            WY_Response::redirect('admin/posts/all');
        }
        $cat = WY_Db::all('SELECT * FROM wy_category WHERE published = 1');
        $this->layout->pageTitle = 'Wayang CMS - Post Add';
        $this->layout->content = WY_View::fetch('admin/posts/new',array('cat'=>$cat));
    }
    
    public function view($id)
    {
        
    }
    
    public function edit($id)
    {
        $post = WY_Db::row('SELECT * FROM wy_post WHERE post_id = :id', array(':id'=> (int) $id));
        if(!$post){
            $view = new WY_View('404');
            $view->render();
            exit();
        }
        $cat = WY_Db::all('SELECT * FROM wy_category');
        if(WY_Request::isPost()){
            $title = $_POST['title'];
            if(isset($_POST['published']))
            {
                $published = 1;
            }
            else{
                $published = 0;
            }
            if(isset($_POST['a_comment']))
            {
                $comment = 1;
            }
            else{
                $comment = 0;
            }
            if($_POST['permalink']==="")
            {
                $permalink = strtolower(str_replace(' ', '-', $_POST['title']));
            }
            else
            {
                $permalink = strtolower(str_replace(' ', '-', $_POST['permalink']));
            }
            $content = $_POST['content'];
            $tags = $_POST['tags'];
            $cat_id = $_POST['category'];
            WY_Db::execute('UPDATE `wy_post` SET'
                    . '`cat_id` = :cat_id, `title` = :title, `tag` = :tag, `content` = :content, `comment_open` = :comment_open, `permalink` = :permalink, `published` = :published, `date_modified` = NOW() WHERE post_id = :id', array(
                    ':cat_id'=>$cat_id,
                    ':title'=>$title,
                    ':tag'=>$tags,
                    ':content'=>$content,
                    ':comment_open'=>$comment,
                    ':permalink'=>$permalink,
                    ':published'=>$published,
                    ':id'=> (int) $id,
                ));
            WY_Response::redirect('admin/posts/all');
        }
        $this->layout->pageTitle = 'Wayang CMS - Pages Edit';
        $this->layout->content = WY_View::fetch('admin/posts/edit',array('post'=>$post, 'cat'=>$cat));
    }
    
    public function delete($id)
    {
        WY_Db::execute('DELETE FROM wy_post WHERE post_id = :id', array(':id'=> (int) $id));
        WY_Db::execute('DELETE FROM wy_comment WHERE post_id = :id', array(':id'=> (int) $id));
        WY_Response::redirect('admin/posts/all');
    }
}