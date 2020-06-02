<?php
    include 'config/constants.php';
    include 'classes/DB.php';

    include 'pages.php';

    // CSRF VERIFY
//    session_start();
//    if (empty($_SESSION['token'])) {
//        $_SESSION['token'] = bin2hex(random_bytes(32));
//    }
//    $token = $_SESSION['token'];
//    echo $token;
	include 'header.php';

    if($page_name) {
        include "pages/".$page_name;
    }else {
        echo 'Page Not Found';
    }

//    echo $page_name.'from index';

	include 'footer.php';
$db->close();
?>