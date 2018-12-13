<?php
    // allow us  to draw config options from our config
    class Config{
        public static function get($path = null){
            if($path){
                $config = $GLOBALS['config'];
                $path = explode('/', $path);

                print_r($path);
                
            }

        }
    }