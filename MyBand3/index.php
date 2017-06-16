<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';

// head
$templateParser->assign('myTitle', $title);
$templateParser->display('head.tpl');

// header
$templateParser->display('header.tpl');

// menu
$templateParser->display('menu.tpl');

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {
    case 'home':
        $templateParser->display('home.tpl');
        break;
    case 'blog':
//        include 'model/get_pagination.php';
//        $templateParser->assign('page', $page);
//        include 'model/get_data.php';
        //get blog from the model
        require_once 'model/getblog.php';
//        $templateParser->assign('number_pages', $number_pages);
        $templateParser->assign('result', $result);
        $templateParser->assign('blog_list', $result_list);
        $templateParser->display('blog.tpl');
        break;
    case 'about':
        require_once 'model/getabout.php';
        $templateParser->assign('about_list', $result_list);
        //use 'display' to show a template
        $templateParser->display('about.tpl');
        break;
    case 'agenda':
        //agenda
        $templateParser->display('agenda.tpl');
        break;

    case 'search':
        //zoeken
        $templateParser->display('search.tpl');
        break;
    case 'sitemap':
        //zoeken
        $templateParser->display('sitemap.tpl');
        break;
}

// footer
include 'views/footer.tpl';

?>