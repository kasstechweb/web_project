<?php
    include 'classes/RewriteUrl.php';

    $page_name = '';$cat = '';
/*----------------- Testing ---------------------*/
    RewriteUrl::get('/', 'home.php');
    RewriteUrl::get('home', 'home.php');
    RewriteUrl::get('test', 'test.php');
    RewriteUrl::get('category', 'category.php');

/*----------------- Front ---------------------*/

/*----------------- Admin ---------------------*/

    $page_name = RewriteUrl::get_page_name();
    $cat = RewriteUrl::get_cat_name();
?>