<?php
    include 'config/constants.php';
    include 'pages.php';
	include 'header.php';

    if($page_name) {
        include "pages/".$page_name;
    }else {
        echo 'Page Not Found';
    }

//    echo $page_name.'from index';

	include 'footer.php'
?>