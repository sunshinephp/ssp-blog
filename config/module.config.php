<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'sspblog-blog-controller' => 'SspBlog\Controller\BlogController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'blog-index' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/blog',
                    'defaults' => array(
                        'controller'    => 'sspblog-blog-controller',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'foo' => array(
                        'type'    => 'Literal',
                        'options' => array(
                            'route'    => '/foo',
                            'defaults' => array(
                                'controller' => 'sspblog-blog-controller',
                                'action'     => 'foo',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Blog',
                'route' => 'blog-index',
                'lastmod' => '2013-09-08',
                'changefreq' => 'monthly',
                'priority' => '0.5',
                'order' => '80',
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'SspBlog' => __DIR__ . '/../view',
        ),
    ),
);
