<?php

namespace SspBlog\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class BlogController extends AbstractActionController
{
    public function indexAction()
    {
        echo 'blog-controller-test';
        
        return array();
    }

    public function fooAction()
    {
        return array();
    }
}
