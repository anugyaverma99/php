<!-- # different forms of writing php tag; -->
<?php
// echo "Hello world";
?> 

<!--  <?='hello';?>
<?php  echo " this is a test "?>
<?php echo ' we omitted the last closing tag ';?> -->
<?php  
// echo "this"."is"."sss ";
// $a=10;
// $b=5;
//  echo "$a + $b ";
//  echo $a + $b ;
//  echo $a.$b ;
//  echo gettype($a);
//  $c=10.6;
// echo "<br>";
//  echo gettype($c);
//  $m=(9<5);
//  echo gettype($m)."<br>";
//  echo $m."<br>";
// //  to define a constant -define(var,value) function ,const keyword is used
// define("WISHES","good evening");
// echo WISHES."<br>";
// echo gettype(WISHES)."<br>";

// //arrays

// define("courses",[
//     "php",
//     "html",
//     "css"
// ]);
// echo courses[0];
// // or $arr=["a","b","c"];
// // or $arr=array("a","b","c");

// //function 

// function test(){
//     echo WISHES;
// }
// test();
// echo "<br>";


//operators
// $x=10;
// $y="10";
// echo $x==$y; //compare only value not data type
// echo $x===$y;// check for the data type also

// $x=25;
// $y=35;
// $z="25";
// echo($x==$z)."<br>";
// var_dump($x==$z); // return the answer in boolean as well as the datatype eg.bool
// echo "<br";


 //null coalescing operator --??
//  $x=$y??"hello";
//  echo $x."<br>";
//  $y="world";
//  $z=$y??"hello";
//  echo $z."<br>";

//logical operators
// $x=10;
// $y=8;
// echo ($x && $y);
// echo ($x || $y);
// echo ($x  $y);

// conditional statements

// $d=date("D"); //date() is a predefined function which will return the first three letters of today's day;
// if($d=="Thu"){
//     print "it's tuesday"; // print will also work same as echo here;
// }
// else
// print "it's not tuesday";  

// for($i=1;$i<3;$i++){
//     echo "hello";
// }

//for loop

// for($i=1;$i<=5;$i++){
//     echo $i;
// }

//for-each loop

// $colors=array("red","blue","green");
//  foreach($colors as $value){
//     echo $value."<br>";
//  }

//associative arrays

$superhero=array(
    "name"=>"peter parker",
    "email"=>"peterparker@gmail.com",
    "age"=>18
);
// foreach($superhero as $key=>$value){
//     echo $key.":".$value."<br>";
// }

$keys=array_keys($superhero);
$values=array_values($superhero);
for($x=0;$x<count($superhero);$x++){
    echo "key =".$keys[$x].","."value = ".$values[$x]."<br>";
}



//continue statement 
// for($i=1;$i<=3;$i++){
//     for($j=1;$j<=3;$j++){
//         if($i==$j){
//             continue;
//         }
//         echo $i.$j."<br>";
//     }
// }

// indexed array
// $courses=array("php","laravel","nodejs");
// echo "i like ".$courses[0].", ".$courses[1]." and ".$courses[2];
// echo "<br>".count($courses);

// array operators
$a=array("int219"=>"front end developer","int220"=>"php");
$b=array("int222"=>"nodejs","cse316"=>"operating system");
$c=$a+$b;
var_dump($c);
echo"<br>";
var_dump($a==$b);
echo"<br>";
var_dump($a===$b);
echo"<br>";
var_dump($a!=$b);
echo"<br>";
var_dump($a<>$b);
echo"<br>";
var_dump($a!==$b);

// ?>
