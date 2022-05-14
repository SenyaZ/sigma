<?php

   $obj = (object)array(
       "1"=>200,
       "2"=>200,
       "3"=>20
   );

    function foo($obj, $countStaff){
        $count = 0;
        foreach ($obj as $name => $value){
            $count += $value;
        }

        if ($count > $countStaff){
            return $count - $countStaff;
        }
        return 0;
    }

    print_r(foo($obj, 400));

    ////////////////
    /// task 2














//
//    interface ProductAbstract{
////        public $name;
////        public $price;
////        public $weight;
////        public $kategory;
//        public function discount($procent);
//        public function __construct($name, $price, $weight, $kategory);
//    }
//
//     interface ProductAbstract2{
////        public $name;
//        public function hello();
//    }
//
//
//    class Product implements ProductAbstract, ProductAbstract2{
//        public $name;
//        public $price;
//        public $weight;
//        public $kategory;
//
//        function hello(){
//          echo "hello";
//        }
//        public function discount($procent){
//            $this->price = (1 - $procent/100) *$this->price;
//
//        }
//        public function __construct($name, $price, $weight, $kategory) {
//            $this->name = $name;
//            $this->price = $price;
//            $this->weight = $weight;
//            $this->kategory = $kategory;
//        }
//
//
//    }
//
//
//    class user{
//        public static $name;
//        public static function printName(){
//            echo self::$name."<br>";
//        }
//    }
//
//    user::$name = "Senya";
//    user::printName();
//
//    $Banana = new Product( "Банан", 20, 100, "Fruit");
//    $class_vars = get_class_vars(get_class($Banana));
//
//
//    $Banana->hello();
//    echo '<br>';
//    var_dump($Banana);
//    $Banana->discount(10);
//    echo '<br>';
//    var_dump($Banana);
//    echo '<br>';
//    $lol = new Product( "Банан", 20, 100, "Fruit");
//    var_dump($lol);
//
//
//
//    $file1 = "index123.php";
//
//
//// исключения
//    try {
//        if (!file_exists($file1)){
//            throw new Exception("file not found");
//        }
//    }catch(Exception $e){
//        echo $e->getMessage();
//    }
//
//    //basic procedure
//echo "<br>";
//
//    $array = array(
//        "foo" => "bar",
//        "bar" => "boo",
//    );
//
//    $array2 = [
//        "foo" => "bar",
//        "bar" => "boo",
//    ];
//
//    $array3 = array(
//        "foo" => "bar",
//        "bar" => "foo",
//        100   => -100,
//        -100  => 100,
//    );
//
//var_dump($array3);
//
//echo "<br>";
//foreach ($array3 as $value){
//
//    echo $value."<br>";
//
//
//}
//
//$newArr = array();
//
//    for ($i = 0; $i <= 10; $i++) {
//
//        $newArr[$i] = $i;
////        echo $arr[$i];
//}
////    $newArr = array_fill(0, $n, 'val');
////
//
//    foreach ($newArr as $znach){
//
//        echo $znach."<br>";
//
//
//    }
//
//var_dump($newArr);
//
//
//
////
////    echo "<br><br><br>";
////
//
//
//
//
//
//
////
////    $file = "1.txt";
////
////    try {
////        if (!file_exists($file)) {
////            throw new Exception("file not found");
////        }
////    }
////    catch (Exception $e) {
////        echo $e->getMessage();
////    }
////
////
////    $fp = fopen($file, 'r');
////
////
////
////    $skip = 0;
////
////    while ("\n" !== ($char = fgetc($fp))) {
////        $skip ++;
////    }
////
////
////
////
////    $data = [];
////    $countLines = 0;
////
////    while (!feof($fp)){
////        $mytext = fgets($fp);
////        $data[$countLines]= $mytext;
////        $countLines ++;
////}
////
////fclose($fp);
////
////
////
////
////interface HumanInt{
////        public function __construct($name,$age,$profession,$family);
////        public function showObject();
////}
////class Human implements HumanInt {
////    public $name;
////    public $age;
////    public $profession;
////    public $family;
////
////    public function __construct($name,$age,$profession,$family){
////
////        $this->name = $name;
////        $this->age = $age;
////        $this->profession = $profession;
////        $this->family = $family;
////    }
////
////    public function showObject(){
////        echo "Name: $this->name<br>Age: $this->age<br>Profession: $this->profession<br>Family: $this->family<br><br>";
////
////    }
////}
////
////
////$arrOfObject = [];
////
////
////    for ($i = 0; $i < $countLines - 1; $i++) {
////        $word = explode(" ", $data[$i]);
////
////        if(gettype($word[0]) == "string" && gettype($word[2]) == "string" ){
////            $arrOfObject[$i] = new Human($word[0],$word[1],$word[2],$word[3]);
////        }
////
////    }
////
//////    var_dump($arrOfObject);
////
////
////
////    for ($i = 0; $i < $countLines - 1; $i++) {
////        $arrOfObject[$i]->showObject();
////    }
////
//
//    //var_dump($arrOfObject[0]);
//
//
////
//////    A-B,11
//////    A-C,10
//////    B-D,5
//////    C-D,6
//////    C-E,15
//////    D-E,4
////
////
////    A   B   C   D   E
////A   0   11  10  0   0
////B   11  0   0   5   0
////C   10  0   0   6   15
////D   0   5   6   0   4
////E   0   0  15   4   0
////