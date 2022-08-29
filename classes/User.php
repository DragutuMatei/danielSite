<?php
class User
{
    private $_db, $_data, $_sessionName, $_count= 0 ;
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

    public function getPosts()
    {
        $posts = $this->_db->get("blog", array("id", ">", "0"), "ORDER BY data DESC LIMIT 6");
        return $posts->results();
    }

    public function getPost($id)
    {
        $post = $this->_db->get("blog", array("id", "=", $id));
        return $post->first();
    }

    public function getAll()
    {
        $post = $this->_db->get("blog", array("id", ">=", "0"), "ORDER BY data DESC");
        return $post->results();
    }

    public function getPostsBy($sect)
    {
        $posts = $this->_db->get("blog", array("sectiune", "=", $sect), "ORDER BY data DESC");
        return $posts->results();
    }



    public function addEvent($fields = array())
    {
        if (!$this->_db->insert("events", $fields)) {
            throw new Exception("nu a mers, dc? nush");
        }
    }

    public function deleteEvent($fields)
    {
        if (!$this->_db->delete("events", $fields)) {
            throw new Exception("nu a mers, dc? nush");
        }
    }

    public function getEvents()
    {
        $posts = $this->_db->get("events", array("id", ">", "0"), "ORDER BY data DESC LIMIT 6");
        return $posts->results();
    }

    public function getEvent($id)
    {
        $post = $this->_db->get("events", array("id", "=", $id));
        return $post->first();
    }

    public function getAllEv()
    {
        $post = $this->_db->get("events", array("id", ">=", "0"), "ORDER BY data DESC");
        return $post->results();
    }

    public function getEventsBy($sect)
    {
        $posts = $this->_db->get("events", array("an", "=", $sect), "ORDER BY data DESC");
        
        return $posts->results();

    }

    public function getCount()
    {
        return $this->_db->count();
    }
}
