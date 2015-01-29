<?php
function __autoload($class_name){
    include_once("classes/".$class_name.".php");
}
$bkiict=new Bkiict();
//echo $bkiict->fullName;

$student=new Student();
//var_dump($student);

$course=new Course();
echo $course->title;
echo "<br/>";
$course->title='Course title';
echo $course->title;
echo "<br/>";
var_dump($course);