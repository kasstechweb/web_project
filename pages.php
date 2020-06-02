<?php
    include 'classes/RewriteUrl.php';
    $obj = new RewriteUrl();
    $page_name = '';$cat = '';
/*----------------- Testing ---------------------*/
    $obj->get('test', 'test.php');
//    RewriteUrl::get('test', 'test.php');

/*----------------- Auth ---------------------*/
$obj->get('register', 'register.php');
/*----------------- Front ---------------------*/
$obj->get('/', 'home.php');
$obj->get('category', 'category.php');

/*----------------- Admin ---------------------*/

    $page_name = $obj->get_page_name();
    $cat = $obj->get_cat_name();
?>