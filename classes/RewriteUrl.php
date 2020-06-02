<?php
    class RewriteUrl {
        protected $url;
        static $page;

        function page_name($url, $page) {
            $path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
            $elements = explode('/', $path);                // Split path on slashes
            $elements[0] = $elements[1];
                switch(array_shift($elements)) {           // Pop off first item and switch
                case $url:
                    // set page in this class tp page name
                    self::$page = $page;
                    // load page
                    break;
                default:
                    header('HTTP/1.1 404 Not Found');
            }
        }

        public function get($url, $page) {
            if($url == '/') {
//                echo $page;
            }else {
                $obj = new RewriteUrl();
                return $obj->page_name($url, $page);
            }
        }

        public static function get_page_name() {
            return self::$page;
        }

    }
?>