<?php
class Course{
    function __set($a,$b){
        echo "Hi";

    }
}
{
    function __call($functionName,$arguments){
        echo "hello";
        var_dump($functionName);
        var_dump($arguments);
    }

}