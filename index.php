<?php

    function func($str, $num){

        $arrWords = explode( " ", $str);
        $array = [];
        $i = 0;
        foreach ($arrWords as $value){
            if(strlen($value) > $num){
             $array[$i] = $value;
            }
            $i ++;
        }

        return $array;
    }


//    print_r( func("31234324 123324 32 4", 4));


    function func2($num){

        while ($num != 0 ) {
            $numbers[] = $num % 10;
            $num = intval($num / 10);
        }
        rsort($numbers);
        $numbers = implode("", $numbers);

        return $numbers;
    }

//    print_r(func2(43215));



    function leftRotations($string){
        $arr = [];
        $arr[0] = $string;
        $count = strlen($string);
        $str = str_split($string);

        array_shift();
        for($i = 0; $i < $count - 1; $i++){
            $temp = $str[0];
            $str[$count] = $temp;
            implode("", $str);
            print_r($str);
        }

        return $arr;
    }

//    print_r(leftRotations("abc"));

    function func5($num){
        $averages = [];
        $i = 0;
        foreach ($num as $value){
            $averages[] = ($value[$i] + $value[$i + 1])/2;
            $i++;
        }

        print_r($averages);
        return $averages;
    }
//   print_r(func5([1,3,5,1,-10]));




















function foo($str){

    $patt = '~(?<vowels>[aoyeu])~';
    preg_match_all($patt, $str , $a);
    return count($a['vowels']);

}

//print_r(foo("abcefyeg"));




    class Student{
        protected $firstName;
        protected $lastName;
        protected $group;
        protected $mark;
        protected $obj;

        public function __construct($firstName, $lastName, $group, $mark)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->group = $group;
            $this->mark= $mark;
        }
        public function getObj($work){

            $this->obj = new Aspirant($work);
        }

        public function getScholarship(){
            if($this->mark == 5){
                return 100;
            }else return 80;
        }


    }

class Aspirant {
       protected $sinceWork;
       public function __construct($sinceWork)
       {
           $this->sinceWork=$sinceWork;
       }

    public function getScholarship(){
        if($this->mark == 5){
            return 200;
        }else return 180;
    }

}

$student = new Student("a","b","c", 5);
    $student->getObj(true);






