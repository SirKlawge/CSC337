<?php
/*
Author: Ventura Abram
Homework 3
This is the PHP file that allows each movie review file to open its info.txt and
overview.txt files and extract the metadata about the movie.
*/
    //Make a class for the info.  Have clients give it the filename of info.txt
    class Info {
        public $title, $year, $rating, $numReviews;

        function  __construct($filename) {
            //open the file
            $currentLine = 0;
            foreach(file($filename) as $line) {
                if($currentLine == 0) {
                    $this->title = $line;
                }else if($currentLine == 1) {
                    $this->year = $line;
                } else if($currentLine == 2) {
                    $this->rating = $line;
                } else {
                    $this->rumReviews = $line;
                }
                $currentLine++;
            }
        }

        public function getTitle() {
            return $this->title;
        }

        public function getYear() {
            return $this->year;
        }

        public function getRating() {
            return $this->rating;
        }

        public function getNumReviews() {
            return $this->numReviews;
        }
    }

    class Overview {
        public $info = array("", "","","","","","","","", "");

        function __construct($filename) {
            //traverse the file
            $currentLine = 0;
            foreach(file($filename) as $line) {
                $this->info[$currentLine] = $line;
                $currentLine++;
            }
        }

        public function getInfoSansLabel($itemNum) {
            return explode(":", $this->info[$itemNum])[1];
        }

        public function getInfo($itemNum) {
            return $this->info[$itemNum];
        }

        public function printInfo() {
            $lineNum = 0;
            foreach($this->info as $data) {
                //first split with explode
                if($lineNum != 8) {
                    $currentItem = explode(":", $data);
                    echo "<b>" . $currentItem[0] . ":</b>" . $currentItem[1] . "</br>";
                }
                $lineNum++;
            }
            return;
        }
    }
?>