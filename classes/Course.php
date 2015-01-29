<?php
class Course{
    function __set($a,$b){
       // echo "Hi";
        var_dump($a);
        var_dump($b);

    }
}
{
    function __call($functionName,$arguments){
        echo "hello";
        var_dump($functionName);
        var_dump($arguments);
    }

}