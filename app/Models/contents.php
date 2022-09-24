<?php

    namespace App\Models;

    class Contents{
        public static function getAllContents(){
            return [
                [
                    'id' => '1',
                    'title' => 'Introduction to PHP',
                    
                ],
                [
                    'id' => '2',
                    'title' => 'Variables in PHP'

                ]
                ];
        }

        public static function getContent($title){
             $contents = self::getAllContents();
             foreach($contents as $content){
                if($title === $content['title']) return $content;
             }

        }
    }

?>