<?php
    class RewriteUrl {
        protected $url;
        static $page;
        static $cat;

        function page_name($url, $page) {
            $path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
            $elements = explode('/', $path);                // Split path on slashes
            switch($elements[1]) {           // switch
                case $url:
                    // set page in this class tp page name
                    self::$page = $page;
                    break;
                default:
                    header('HTTP/1.1 404 Not Found');
            }

            if(array_key_exists(2, $elements)) {
                self::$cat = $elements[2];
            }

        }

        public function get($url, $page) {
            $obj = new RewriteUrl();
            if($url == '/') {
                self::$page = $page;
            }else {
                return $obj->page_name($url, $page);
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