<?php
$a=1024;
$b="madhu";
$c=3.5;
$d=True;
$e=null;
$array=array(1,2,3,4,5);
$array[5]="madhu";
echo var_dump($a);
echo "<br>";
echo var_dump($b);
echo "<br>";
echo var_dump($c);
echo "<br>";
echo var_dump($d);
echo "<br>";
echo var_dump($e);
echo "<br>";
echo var_dump($array);
echo "<br>";
echo var_dump($array[5]);
echo "<br>";


#variable_scope
$greeting="hi madhulatha";  //global scope
function greet(){
    global $greeting;
    echo $greeting;
}
greet();
echo "<br>";
#echo $greeting;    for function calling use this also   
function greet1(){
    $greeting1="hello madhu"; //local scope
    echo $greeting1;
}
greet1();
echo "<br>";
function greet2(){
    static $count=2;  //static scope
    $count++;
    echo $count;
    echo "<br>";
}
greet2();
?>