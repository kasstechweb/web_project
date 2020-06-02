<?php
    include 'classes/RewriteUrl.php';

    $page_name = '';
/*----------------- Testing ---------------------*/
    RewriteUrl::get('/', 'home page');
    RewriteUrl::get('test', 'test.php');
    RewriteUrl::get('hello', 'hello.php');

/*----------------- Front ---------------------*/

/*----------------- Admin ---------------------*/

    $page_name = RewriteUrl::get_page_name();
?>