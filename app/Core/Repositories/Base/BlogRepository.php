<?php

namespace Repositories\Base;

trait BlogRepository
{

    /**
     * @var \Repositories\Blog\ArticleRepository
     */
    protected $_blogArticleRepo;

    /**
     * @return \Repositories\Blog\ArticleRepository
     */
    public function getBlogArticleRepo()
    {
        if(!$this->_blogArticleRepo){
            $this->_blogArticleRepo = \App::make('\Repositories\Blog\ArticleRepository');
        }
        return $this->_blogArticleRepo;
    }

    /**
     * @var \Repositories\Blog\ArticleRepository
     */
    protected $_blogTagRepo;

    /**
     * @return \Repositories\Blog\TagRepository
     */
    public function getBlogTagRepo()
    {
        if(!$this->_blogTagRepo){
            $this->_blogTagRepo = \App::make('\Repositories\Blog\TagRepository');
        }
        return $this->_blogTagRepo;
    }

}
