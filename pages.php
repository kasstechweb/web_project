<?php
    include 'classes/RewriteUrl.php';

    $page_name = '';
/*----------------- Testing ---------------------*/
    RewriteUrl::get('/', 'home.php');
    RewriteUrl::get('home', 'home.php');
    RewriteUrl::get('test', 'test.php');
    RewriteUrl::get('hello', 'hello.php');

/*----------------- Front ---------------------*/

/*----------------- Admin ---------------------*/

    $page_name = RewriteUrl::get_page_name();
?>