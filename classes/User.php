<?php
class User
{
    private $_db, $_data, $_sessionName;
    public $_isLoggedIn = false;

    public function __construct()
    {
        $this->_db = DB::getInstance();
    }

    public function addPost($fields = array())
    {
        if (!$this->_db->insert("blog", $fields)) {
            throw new Exception("nu a mers, dc? nush");
        }
    }

    public function deletePost($fields)
    {
        if (!$this->_db->delete("blog", $fields)) {
            throw new Exception("nu a mers, dc? nush");
        }
    }

    public function getPosts(){
        $posts = $this->_db->get("blog", array("id",">","0"), "ORDER BY ID DESC LIMIT 6");
        return $posts->results();
    }

    public function getPost($id){
        $post = $this->_db->get("blog", array("id","=",$id));
        return $post->first();
    }

}
