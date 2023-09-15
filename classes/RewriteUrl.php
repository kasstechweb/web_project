<?php
    class RewriteUrl {
        protected $url;
        static $page;
        static $cat;

        public function get($url, $page) {
            $path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
            $elements = explode('/', $path);                // Split path on slashes
//            echo $elements[1];
            if(array_key_exists(0, $elements) && $elements[1] == NULL) {
                self::$page = 'home.php';
            }
            if(array_key_exists(1, $elements)) {
                switch($elements[1]) {           // switch
                    case $url:
                        // set page in this class tp page name
                        self::$page = $page;
//                        echo $page;
                        break;
//                    default:
//                        header('HTTP/1.1 404 Not Found');
                }
            }

            if(array_key_exists(2, $elements)){
                self::$cat = $elements[2];
            }
        }

        public static function get_page_name() {
            return self::$page;
        }

        public static function get_cat_name() {
            return self::$cat;
        }

    }
?>